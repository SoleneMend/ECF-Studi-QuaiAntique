<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['allergies'])) {

    // problem avec le type de convive
    $allergies = htmlspecialchars($_POST['allergies']);

    $check = $pdo->prepare('SELECT user_mail, user_allergies FROM users WHERE user_mail = ?');
    $check->execute(array($_SESSION['user']['mail']));
    $data = $check->fetch();
    $row = $check->rowCount();
    
    if (strlen($allergies)) {
        if ($allergies !== $data['user_allergies']) {
        $update = $pdo->prepare("UPDATE users SET user_allergies = (:aller) WHERE user_mail = (:mail)");
        $update->execute(array('aller' => $allergies, 'mail' => $data['user_mail']));
        header('Location:modifier-profil.php?allergies_err=success');
    
        } else header('Location:modifier-profil.php?allergies_err=same');
    } else header('Location:modifier-profil.php?allergies_err=length');
} else header('Location:modifier-profil.php?allergies_err=incorrect');