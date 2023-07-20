<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['title'])) {
    $title = htmlspecialchars($_POST['title']);

    $check = $pdo->prepare('SELECT carte_name FROM carte WHERE carte_name = ?');
    $check->execute(array($title));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1)
    {
        $delete = $pdo->prepare('DELETE FROM carte WHERE carte_name = :name');
        $delete->execute(array('name' => $title));
        header('Location:page-admin.php?SupprimeCarte=success');
    
    }else header('Location:page-admin.php?SupprimeCarte=doesntExist');
}else header('Location:page-admin.php?SupprimeCarte=title');