<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['title'])) {
    $title = htmlspecialchars($_POST['title']);

    $check = $pdo->prepare('SELECT galerieImage_name FROM galerieImage WHERE galerieImage_name = ?');
    $check->execute(array($title));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1)
    {
        $delete = $pdo->prepare('DELETE FROM galerieImage WHERE galerieImage_name = :name');
        $delete->execute(array('name' => $title));
        header('Location:page-admin.php?SupprimeImage_err=success');
    
    }else header('Location:page-admin.php?SupprimeImage_err=doesntExist');
}else header('Location:page-admin.php?SupprimeImage_err=title');