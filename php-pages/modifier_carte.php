<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['title'])) {
    $title = htmlspecialchars($_POST['title']);
    $new_title = htmlspecialchars($_POST['newTitle']);
    $description = htmlspecialchars($_POST['description']);
    $prix = htmlspecialchars($_POST['prix']);

    $check = $pdo->prepare('SELECT carte_name, carte_description, carte_price FROM carte WHERE carte_name = ?');
    $check->execute(array($title));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) 
    {
        if (isset($_POST['description']) && (strlen($description) <= 255)) {
            $update_desc = $pdo->prepare("UPDATE carte SET carte_description = (:desc) WHERE carte_name = (:name)");
            $update_desc->execute(array('desc' => $description,'name' => $data['carte_name']));
            header('Location:page-admin.php?ModifieCarte_err=success');
            
        } else header('Location:page-admin.php?ModifieCarte_err=desc');

        if (isset($_POST['prix'])) {
            $update_price = $pdo->prepare("UPDATE carte SET carte_price = (:price) WHERE carte_name = (:name)");
            $update_price->execute(array('price' => $prix,'name' => $data['carte_name']));
            header('Location:page-admin.php?ModifieCarte_err=success');
            
        } else header('Location:page-admin.php?ModifieCarte_err=price');

        if (isset($_POST['newTitle']) && (strlen($title) <= 36)) 
        {
            $update_title = $pdo->prepare("UPDATE carte SET carte_name = (:name) WHERE carte_name = (:title)");
            $update_title->execute(array('name' => $new_title,'title' => $title));
            header('Location:page-admin.php?ModifieCarte_err=success');

        } else header('Location:page-admin.php?ModifieCarte_err=new-title');
    }else header('Location:page-admin.php?ModifieCarte_err=CarteNotFound');
}else header('Location:page-admin.php?ModifieCarte_err=title-incorrect');