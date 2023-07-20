<?php
session_start();
include '../mysql/connect.php';
include 'functions.php';

if (isset($_POST['name']) && isset($_POST['convives']) && isset($_POST['mail']) && isset($_POST['day']) && isset($_POST['hour'])) {
    $name = htmlspecialchars($_POST['name']);
    $convives = htmlspecialchars($_POST['convives']);
    $mail = htmlspecialchars($_POST['mail']);
    $day = htmlspecialchars($_POST['day']);
    $time = htmlspecialchars($_POST['hour']);

    $check = $pdo->prepare('SELECT reservation_mail, reservation_date FROM reservations WHERE reservation_mail = (:mail) AND reservation_date = (:date)');
    $check->execute(array('mail' => $mail, 'date' => GetJourdeSemaine($day)));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 0) {
        if ((strlen($name) <= 36) && (strlen($mail) <= 255)) {
            $name_day = GetJourdeSemaine($day);
            foreach($pdo->query("SELECT * FROM horaire WHERE horaire_day ='".$name_day."'", PDO::FETCH_ASSOC) as $horaire) {
                if ((strtotime($horaire['horaire_start']) <= strtotime($time)) && (strtotime($time) <= strtotime($horaire['horaire_end']))) {
                    $seuille = 0;
    
                    foreach ($pdo->query("SELECT * FROM reservations WHERE reservation_date ='".$day."'", PDO::FETCH_ASSOC) as $res) {
                    if (($res['reservation_date'] == $name_day) && ( ($horaire['horaire_start'] <= $res['reservation_heure']) && ($res['reservation_heure'] <= $horaire['horaire_end'])))
                        $seuille += $res['reservation_nbConvives'];
                    }
    
                    if (($seuille + $convives) <= $horaire['seuille_max']) {
                        $allergies = $_POST['allergies'];
    
                        $insert = $pdo->prepare('INSERT INTO reservations(reservation_name, reservation_mail, reservation_nbConvives, reservation_date, reservation_heure, reservation_allergies) VALUES(:name, :mail, :convives, :date, :time, :allergies)');
                        $insert->execute(array('name' => $name, 'mail' => $mail, 'convives' => $convives, 'date' => $day, 'time' => $time, 'allergies' => $allergies));
                        header('Location:page-reservation.php?reserv_err=sucess');
                    }else header('Location:page-reservation.php?reserv_err=size');
                }else header('Location:page-reservation.php?reserv_err=time');
            }            
        }else header('Location:page-reservation.php?reserv_err=length');
    }else header('Location:page-reservation.php?reserv_err=already');
}else header('Location:page-reservation.php?reserv_err=incorrect');