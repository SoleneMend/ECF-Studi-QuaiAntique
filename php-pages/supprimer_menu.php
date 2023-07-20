<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['title'])) {
    $title = htmlspecialchars($_POST['title']);

    $check = $pdo->prepare('SELECT menu_title FROM menu WHERE menu_title = ?');
    $check->execute(array($title));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1)
    {
        $delete = $pdo->prepare('DELETE FROM menu WHERE menu_title = :name');
        $delete->execute(array('name' => $title));
        header('Location:page-admin.php?SupprimeMenu=success');
    
    }else header('Location:page-admin.php?SupprimeMenu=doesntExist');
}else header('Location:page-admin.php?SupprimeMenu=title');