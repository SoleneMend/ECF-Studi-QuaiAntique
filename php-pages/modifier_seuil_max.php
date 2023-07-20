<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['day']) && isset($_POST['time']) && isset($_POST['seuil'])) {
    $day = htmlspecialchars($_POST['day']);
    $time = htmlspecialchars($_POST['time']);
    $seuil = htmlspecialchars($_POST['seuil']);

    $check = $pdo->prepare('SELECT seuil_max FROM horaire WHERE horaire_day = (:day) AND horaire_time = (:time)');
    $check->execute(array('day' => $day,'time' => $time));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) {
        if ($seuil !== $data['seuil_max']) {
            $update = $pdo->prepare("UPDATE horaire SET seuil_max = (:seuil) WHERE horaire_day = (:day) AND horaire_time = (:time)");
            $update->execute(array('seuil' => $seuil, 'day' => $day, 'time' => $time));
            header('Location:page-admin.php?Seuil_err=success');

        } else header('Location:page-admin.php?Seuil_err=same');
    } else header('Location:page-admin.php?Seuil_err=notExist');
} else header('Location:page-admin.php?Seuil_err=incorrect');