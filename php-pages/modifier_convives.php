<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['convives'])) {

    // problem avec le type de convive
    $convives = htmlspecialchars($_POST['convives']);

    $check = $pdo->prepare('SELECT user_mail, user_nbConvives FROM users WHERE user_mail = ?');
    $check->execute(array($_SESSION['user']['mail']));
    $data = $check->fetch();
    $row = $check->rowCount();
    
    if ($convives !== $data['user_nbConvives']) {
        $update = $pdo->prepare("UPDATE users SET user_nbConvives = (:convive) WHERE user_mail = (:mail)");
        $update->execute(array('convive' => $convives, 'mail' => $data['user_mail']));
        header('Location:modifier-profil.php?convives_err=success');

    } else header('Location:modifier-profil.php?convives_err=same');
} else header('Location:modifier-profil.php?convives_err=incorrect');
