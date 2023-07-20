<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['old-password']) && isset($_POST['new-password']) && isset($_POST['new-retype-password'])) {
    $oldPassword = htmlspecialchars($_POST['old-password']);
    $newPassword = htmlspecialchars($_POST['new-password']);
    $newRetypePassword = htmlspecialchars($_POST['new-retype-password']);

    $check = $pdo->prepare('SELECT user_mail, user_password FROM users WHERE user_mail = ?');
    $check->execute(array($_SESSION['user']['mail']));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($oldPassword === $data['user_password']) {
        if($newPassword === $newRetypePassword) {
            if ($newPassword !== $oldPassword) {
                $update = $pdo->prepare("UPDATE users SET user_password = (:password) WHERE user_mail = (:mail)");
                $update->execute(array('password' => $newPassword,'mail' => $data['user_mail']));
                header('Location:modifier-profil.php?password_err=success');

            }else header('Location:modifier-profil.php?password_err=same');
        }else header('Location:modifier-profil.php?password_err=notsame'); 
    }else header('Location:modifier-profil.php?password_err=old');
}else header('Location:modifier-profil.php?password_err=incorrect');