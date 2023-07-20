<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['prix'])) {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $prix = htmlspecialchars($_POST['prix']);

    $check = $pdo->prepare('SELECT carte_name, carte_description, carte_price FROM carte WHERE carte_name = ?');
    $check->execute(array($title));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 0) {
        if ((strlen($title) <= 36) && (strlen($description) <= 255) && (strlen($horaires) <= 36)) {
            $insert = $pdo->prepare('INSERT INTO carte(carte_name, carte_description, carte_price) VALUES(:name, :desc, :price)');
            $insert->execute(array('name' => $title, 'desc' => $description, 'price' => $prix));
            header('Location:page-admin.php?ajoutCarte_err=success');
    
        } else header('Location:page-admin.php?ajoutCarte_err=length');
    } else header('Location:page-admin.php?ajoutCarte_err=already');
} else header('Location:page-admin.php?ajoutCarte_err=incorrect');