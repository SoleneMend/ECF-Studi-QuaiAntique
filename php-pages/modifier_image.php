<?php
session_start();
include '../mysql/connect.php';

if (isset($_POST['title'])) {
    $title = htmlspecialchars($_POST['title']);
    $new_title = htmlspecialchars($_POST['newTitle']);
    $new_url = htmlspecialchars($_POST['newUrl']);

    $check = $pdo->prepare('SELECT galerieImage_name, galerieImage_imgLink FROM galerieImage WHERE galerieImage_name = ?');
    $check->execute(array($title));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) 
    {
        if (isset($_POST['newUrl']) && (strlen($url) <= 255)) {
            $check_url = $pdo->prepare('SELECT galerieImage_name, galerieImage_imgLink FROM galerieImage WHERE galerieImage_imgLink = ?');
            $check_url->execute(array($new_url));
            $data_url = $check_url->fetch();
            $row_url = $check_url->rowCount();

            if (($row_url == 0) && ($title === $data_url['galerieImage_name']))
            {
                $update_url = $pdo->prepare("UPDATE galerieImage SET galerieImage_imgLink = (:link) WHERE galerieImage_name = (:name)");
                $update_url->execute(array('link' => $url,'name' => $data_url['galerieImage_name']));
                header('Location:page-admin.php?ModifieImage_err=success');
            }
        } else header('Location:page-admin.php?ModifieImage_err=url');

        if (isset($_POST['newTitle']) && (strlen($title) <= 36)) 
        {
            $update_title = $pdo->prepare("UPDATE galerieImage SET galerieImage_name = (:name) WHERE galerieImage_name = (:title)");
            $update_title->execute(array('name' => $new_title,'title' => $title));
            header('Location:page-admin.php?ModifieImage_err=success');
        } else header('Location:page-admin.php?ModifieImage_err=new-title');
    }else header('Location:page-admin.php?ModifieImage_err=ImageNotFound');
}else header('Location:page-admin.php?ModifieImage_err=title-incorrect');