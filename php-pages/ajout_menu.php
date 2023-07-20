<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['horaires']) && isset($_POST['prix'])) {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $horaires = htmlspecialchars($_POST['horaires']);
    $prix = htmlspecialchars($_POST['prix']);

    $check = $pdo->prepare('SELECT menu_title, menu_description, menu_horaire, menu_prix FROM menu WHERE menu_title = ?');
    $check->execute(array($title));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 0) {
        if ((strlen($title) <= 36) && (strlen($description) <= 255) && (strlen($horaires) <= 36)) {
            $insert = $pdo->prepare('INSERT INTO menu(menu_title, menu_description, menu_horaire, menu_prix) VALUES(:name, :desc, :time, :price)');
            $insert->execute(array('name' => $title, 'desc' => $description, 'time' => $horaires, 'price' => $prix));
            header('Location:page-admin.php?ajoutMenu_err=success');
    
        } else header('Location:page-admin.php?ajoutMenu_err=length');
    } else header('Location:page-admin.php?ajoutMenu_err=already');
} else header('Location:page-admin.php?ajoutMenu_err=incorrect');
