<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['day']) && isset($_POST['time']) && isset($_POST['start']) && isset($_POST['end'])) {
    $day = htmlspecialchars($_POST['day']);
    $time = htmlspecialchars($_POST['time']);
    $start = htmlspecialchars($_POST['start']);
    $end = htmlspecialchars($_POST['end']);

    $check = $pdo->prepare('SELECT horaire_day, horaire_time, horaire_start, horaire_end FROM horaire WHERE horaire_day = (:day), horaire_time = (:time)');
    $check->execute(array('day' => $day,'time' => $time));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) 
    {
        $update = $pdo->prepare("UPDATE horaire SET horaire_start = (:start), horaire_end = (:end) WHERE horaire_day = (:day), horaire_time = (:time)");
        $update->execute(array('start' => $start, 'end' => $end, 'day' => $data['horaire_day'], 'time' => $data['horaire_time']));
        header('Location:page-admin.php?Horaires_err=success');

    }else header('Location:page-admin.php?Horaires_err=MenuNotFound');
}else header('Location:page-admin.php?Horaires_err=title-incorrect');