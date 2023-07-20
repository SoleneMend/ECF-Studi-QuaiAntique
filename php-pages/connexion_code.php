<?php
include '../mysql/connect.php';

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $check = $pdo->prepare('SELECT user_name, user_mail, user_password, user_nbConvives, user_allergies, user_role FROM users WHERE user_mail = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($data['user_password'] === $password) {
                session_start();
                $_SESSION['user'] = [
                    'name' => $date['user_name'],
                    'mail' =>  $data['user_mail'],
                    'password' => $data['user_password'],
                    'allergies' => $data['user_allergies'],
                    'convives' => $data['user_nbConvives'],
                    'role' => $data['user_role']
                ];
                header('Location:compte.php?login_err=sucess');

            }else header('Location:connexion.php?login_err=password');
        }else header('Location:connexion.php?login_err=email');
    } else header('Location:connexion.php?login_err=already');
} else header('Location:connexion.php?login_err=incorrect');