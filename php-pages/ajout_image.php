<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['title']) && isset($_POST['url'])) {
    $title = htmlspecialchars($_POST['title']);
    $url = htmlspecialchars($_POST['url']);

    $check = $pdo->prepare('SELECT galerieImage_name, galerieImage_imgLink FROM galerieImage WHERE galerieImage_name = ?');
    $check->execute(array($title));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 0) {

        if ((strlen($title) <= 36) && (strlen($url) <= 255)) {
            $insert = $pdo->prepare('INSERT INTO galerieImage(galerieImage_name, galerieImage_imgLink) VALUES(:name, :link)');
            $insert->execute(array('name' => $title, 'link' => $url));
            header('Location:page-admin.php?ajoutImage_err=success');

        } else header('Location:page-admin.php?ajoutImage_err=length');
    } else header('Location:page-admin.php?ajoutImage_err=already');
} else header('Location:page-admin.php?ajoutImage_err=incorrect');
