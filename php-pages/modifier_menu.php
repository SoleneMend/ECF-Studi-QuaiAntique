<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['title'])) {
    $title = htmlspecialchars($_POST['title']);
    $new_title = htmlspecialchars($_POST['newTitle']);
    $description = htmlspecialchars($_POST['description']);
    $horaires = htmlspecialchars($_POST['horaires']);
    $prix = htmlspecialchars($_POST['prix']);

    $check = $pdo->prepare('SELECT menu_title, menu_description, menu_horaire, menu_prix FROM menu WHERE menu_title = ?');
    $check->execute(array($title));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) 
    {
        if (isset($_POST['description']) && (strlen($description) <= 255)) {
            $update_desc = $pdo->prepare("UPDATE menu SET menu_description = (:desc) WHERE menu_title = (:name)");
            $update_desc->execute(array('desc' => $description,'name' => $data['menu_title']));
            header('Location:page-admin.php?ModifieMenu_err=success');
            
        } else header('Location:page-admin.php?ModifieMenu_err=desc');

        if (isset($_POST['horaires']) && (strlen($horaires) <= 36)) {
            $update_time = $pdo->prepare("UPDATE menu SET menu_horaire = (:time) WHERE menu_title = (:name)");
            $update_time->execute(array('time' => $horaires,'name' => $data['menu_title']));
            header('Location:page-admin.php?ModifieMenu_err=success');
            
        } else header('Location:page-admin.php?ModifieMenu_err=time');

        if (isset($_POST['prix'])) {
            $update_price = $pdo->prepare("UPDATE menu SET menu_prix = (:price) WHERE menu_title = (:name)");
            $update_price->execute(array('price' => $prix,'name' => $data['menu_title']));
            header('Location:page-admin.php?ModifieMenu_err=success');
            
        } else header('Location:page-admin.php?ModifieMenu_err=price');

        if (isset($_POST['newTitle']) && (strlen($title) <= 36)) 
        {
            $update_title = $pdo->prepare("UPDATE menu SET menu_title = (:name) WHERE menu_title = (:title)");
            $update_title->execute(array('name' => $new_title,'title' => $title));
            header('Location:page-admin.php?ModifieMenu_err=success');

        } else header('Location:page-admin.php?ModifieMenu_err=new-title');
    }else header('Location:page-admin.php?ModifieMenu_err=MenuNotFound');
}else header('Location:page-admin.php?ModifieMenu_err=title-incorrect');