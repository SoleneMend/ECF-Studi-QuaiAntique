<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['day']) && isset($_POST['time']) && isset($_POST['seuille'])) {
    $day = htmlspecialchars($_POST['day']);
    $time = htmlspecialchars($_POST['time']);
    $seuille = htmlspecialchars($_POST['seuille']);

    $check = $pdo->prepare('SELECT seuille_max FROM horaire WHERE horaire_day = (:day) AND horaire_time = (:time)');
    $check->execute(array('day' => $day,'time' => $time));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) {
        if ($seuille !== $data['seuille_max']) {
            $update = $pdo->prepare("UPDATE horaire SET seuille_max = (:seuille) WHERE horaire_day = (:day) AND horaire_time = (:time)");
            $update->execute(array('seuille' => $seuille, 'day' => $day, 'time' => $time));
            header('Location:page-admin.php?Seuille_err=success');

        } else header('Location:modifier-profil.php?Seuille_err=same');
    } else header('Location:modifier-profil.php?Seuille_err=existPas');
} else header('Location:modifier-profil.php?Seuille_err=incorrect');