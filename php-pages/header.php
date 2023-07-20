<?php

include "../mysql/connect.php";
include "functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="description" content="Le Quai Antique est le troisième restaurant du Chef Arnaud, installé à Chambéry, 
            specialisé dans la cuisine savoyarde." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.3.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/icon.png" />
    <link rel="stylesheet" href="../stylesheets/style.css" />
    <link rel="stylesheet" href="../stylesheets/button.css" />

    <!-- Title -->
    <title>Quai Antique</title>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top justify-content-between">
        <a class="navbar-brand" href="#header">
            <img src="../assets/logo.png" width="140" height="30" />
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Page d'accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page-reservation.php">Reservation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="compte.php">
                    <i class="ri-user-line"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End Navbar -->

    <!-- Head -->
    <header id="header">
        <div class="text-center mt-5 py-4">
            <img src="../assets/logo.png" width="700" height="130" class="img-fluid" alt="Responsive image" />
        </div>
    </header>
    <!-- End Head -->