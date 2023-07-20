<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $pdo->prepare('SELECT user_name, user_mail, user_password FROM users WHERE user_mail = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0) {
        if ((strlen($email) <= 255) && (strlen($name) <= 36)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if ($password == $password_retype) {
                    $insert = $pdo->prepare('INSERT INTO users(user_name, user_mail, user_password, user_role) VALUES(:name, :email, :password, :role)');
                    $insert->execute(array('name' => $name,'email' => $email,'password' => $password,'role' => "CLIENT"));

                    session_start();
                    $_SESSION['user'] = [
                    'name' => $name,
                    'mail' =>  $email,
                    'password' => $password,
                    'allergies' => NULL,
                    'convives' => '1',
                    'role' => "CLIENT"
                    ];
                    header('Location:compte.php');

                } else header('Location:inscription.php?reg_err=passwords');
            }else header('Location:inscription.php?reg_err=email');
        }else header('Location:inscription.php?reg_err=length');
    }else header('Location:inscription.php?reg_err=already');
}else header('Location:inscription.php');