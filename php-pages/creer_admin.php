<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['mail-role'])) {

    // problem avec le type de convive
    $mail = htmlspecialchars($_POST['mail-role']);

    $check = $pdo->prepare('SELECT user_mail, user_role FROM users WHERE user_mail = ?');
    $check->execute(array($mail));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) 
    {
        if ($data['user_role'] === "CLIENT") 
        {
            $update = $pdo->prepare("UPDATE users SET user_role = (:role) WHERE user_mail = (:mail)");
            $update->execute(array('role' => "ADMIN", 'mail' => $mail));
            header('Location:compte.php?role_err=success');
        } 
        else 
        {
            $update = $pdo->prepare("UPDATE users SET user_role = (:role) WHERE user_mail = (:mail)");
            $update->execute(array('role' => "CLIENT", 'mail' => $mail));
            header('Location:compte.php?role_err=success');
        };
    } else header('Location:compte.php?role_err=mail');
} else header('Location:compte.php?role_err=incorrect');
