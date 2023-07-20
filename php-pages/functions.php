<?php

function heureminute($heure) {
   $arrayheure = explode(':',$heure);
   $newheure = $arrayheure[0].':'.$arrayheure[1];
   return $newheure;
}

function JourdeSemaine() {
    $today = date("l");
    switch ($today) {
        case 'Monday':
            $today = 'lundi';
            break;

        case 'Tuesday':
            $today = 'mardi';
            break;

        case 'Wednesday':
            $today = 'mercredi';
            break;

        case 'Thursday':
            $today = 'jeudi';
            break;

        case 'Friday':
            $today = 'vendredi';
            break;

        case 'Saturday':
            $today = 'samedi';
            break;

        case 'Sunday':
            $today = 'dimanche';
            break;

        default:
            break;
    }
    return $today;
}

 function GetJourdeSemaine($Date) {
    $day = date("l", strtotime($Date));
    switch ($day) {
        case 'Monday':
            $day = 'lundi';
            break;

        case 'Tuesday':
            $day = 'mardi';
            break;

        case 'Wednesday':
            $day = 'mercredi';
            break;

        case 'Thursday':
            $day = 'jeudi';
            break;

        case 'Friday':
            $day = 'vendredi';
            break;

        case 'Saturday':
            $day = 'samedi';
            break;

        case 'Sunday':
            $day = 'dimanche';
            break;

        default:
            break;
    }
    return $day;
 }
