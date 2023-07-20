<?php

session_start();

include 'mysql/connect.php';
include 'php-pages/functions.php';

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
    <link rel="icon" type="image/png" href="assets/icon.png" />
    <link rel="stylesheet" href="stylesheets/style.css" />
    <link rel="stylesheet" href="stylesheets/button.css" />

    <!-- Title -->
    <title>Quai Antique</title>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top justify-content-between">
        <a class="navbar-brand" href="#header">
            <img src="assets/logo.png" width="140" height="30" />
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#header">Page d'accueil</a>
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
            <img src="assets/logo.png" width="700" height="130" class="img-fluid" alt="Responsive image" />
        </div>
    </header>
    <!-- End Head -->

    <!-- Main -->
    <main>
        <!-- Galerie d'Image desktop-->
        <section class="images nav-pc">
            <div id="carouselGalerieImage" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $isfirst = true;
                    foreach ($pdo->query("SELECT * FROM `galerieImage` ORDER BY `galerieImage_id`", PDO::FETCH_ASSOC) as $img) {
                        if ($isfirst) {
                            $isfirst = false;
                            echo
                            "<div class='carousel-item active'>
                                <img class='d-block w-50 mx-auto' src=" . $img['galerieImage_imgLink'] . ">
                                <div class='box carousel-caption d-none d-md-block'>
                                    <h5 class='text-hover'>" . $img['galerieImage_name'] . "</h5>
                                </div>
                            </div>";
                        } else {
                            echo
                            "<div class='carousel-item'>
                                <img class='d-block w-50 mx-auto' src=" . $img['galerieImage_imgLink'] . ">
                                <div class='carousel-caption d-none d-md-block'>
                                    <h5 class='text-hover'>" . $img['galerieImage_name'] . "</h5>
                                </div>
                            </div>";
                        }
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" href="#carouselGalerieImage" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" href="#carouselGalerieImage" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>
        <!-- Galerie d'Image mobile -->
        <section class="images nav-mobile">
            <div id="carouselGalerieImage" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $isfirst = true;
                    foreach ($pdo->query("SELECT * FROM `galerieImage` ORDER BY `galerieImage_id`", PDO::FETCH_ASSOC) as $img) {
                        if ($isfirst) {
                            $isfirst = false;
                            echo
                            "<div class='carousel-item active'>
                                <img class='d-block w-100 mx-auto' src=" . $img['galerieImage_imgLink'] . ">
                                <div class='box carousel-caption d-md-block'>
                                    <h5 class='text-hover'>" . $img['galerieImage_name'] . "</h5>
                                </div>
                            </div>";
                        } else {
                            echo
                            "<div class='carousel-item'>
                                <img class='d-block w-100 mx-auto' src=" . $img['galerieImage_imgLink'] . ">
                                <div class='carousel-caption d-md-block'>
                                    <h5 class='text-hover'>" . $img['galerieImage_name'] . "</h5>
                                </div>
                            </div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- Reservation -->
        <section>
            <div class="text-center py-5" id="reservation">
                <a href="php-pages/page-reservation.php" class="btn btn-quaiAntique btn-lg">Reservation</a><br><br>
            </div>
        </section>
        <!-- Menu + Carte + Horaire Desktop display -->
        <section class="container -appear mt-3 py-2 nav-pc">
            <article class="d-flex justify-content-around align-items-center">
                <div class="order-lg-1">
                    <div class="box px-5" id="menu">
                        <h4 class="text-center">Menu :</h4>
                        <?php
                        foreach ($pdo->query("SELECT * FROM `menu` ORDER BY `menu_id`", PDO::FETCH_ASSOC) as $m) {
                            echo "<hr></hr> <p> <b><u>" . $m['menu_title'] . "</u> : " . $m['menu_prix'] . "€</b><br>" . $m['menu_description'] . "<br> <i>(" . $m['menu_horaire'] . ")</i> </p>";
                        }
                        ?>
                    </div>
                    <div class="text-center px-5 py-5" id="carte">
                        <button type="button" class="btn btn-quaiAntique btn-lg">
                            <a class="text-url-button" href="php-pages/carte.php">Notre Carte </a>
                        </button>
                    </div>
                </div>
                <div class="order-lg-2">
                    <div class="box text-center px-5" id="horaire">
                        <h4>Horaire :</h4>
                        <?php
                        $day = null;

                        foreach ($pdo->query("SELECT * FROM `horaire` ORDER BY `horaire_id`", PDO::FETCH_ASSOC) as $h) {
                            if ($h['horaire_day'] != $day) {
                                $day = $h['horaire_day'];
                                echo "<u><bold>" . $day . "</bold></u> :<br>";
                                if ($h['horaire_start'] == "0:00:00" and $h['horaire_end']) {
                                    echo "<p>FERMÉ | ";
                                } else {
                                    echo "<p>" . heureminute($h['horaire_start']) . " - " . heureminute($h['horaire_end']) . " | ";
                                }
                            } else {
                                if ($h['horaire_start'] == "0:00:00" and $h['horaire_end']) {
                                    echo " FERMÉ </p>";
                                } else {
                                    echo heureminute($h['horaire_start']) . " - " . heureminute($h['horaire_end']) . "</p>";
                                }
                            }
                            if ($h['horaire_day'] != 'dimanche' && $h['horaire_time'] == 'diner') {
                                echo "<hr></hr>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </article>
        </section>
        <!-- Menu + Carte + Horaire mobile display -->
        <section class="container -appear mt-3 py-2 nav-mobile">
            <article class="row align-items-center">
                <div class="order-lg-1">
                    <div class="box px-5 py-5" id="menu">
                        <h4 class="text-center">Menu :</h4>
                        <?php
                        foreach ($pdo->query("SELECT * FROM `menu` ORDER BY `menu_id`", PDO::FETCH_ASSOC) as $m) {
                            echo "<hr></hr> <p> <b><u>" . $m['menu_title'] . "</u> : " . $m['menu_prix'] . "€</b><br>" . $m['menu_description'] . "<br> <i>(" . $m['menu_horaire'] . ")</i> </p>";
                        }
                        ?>
                    </div>
                    <div class="text-center px-5 py-5" id="carte">
                        <a href="php-pages/carte.php" class="btn btn-quaiAntique btn-lg"> Notre Carte </a>
                    </div>
                </div>
                <div class="order-lg-2">
                    <div class="box text-center px-5" id="horaire">
                        <h4>Horaire :</h4>
                        <?php
                        $day = null;

                        foreach ($pdo->query("SELECT * FROM `horaire` ORDER BY `horaire_id`", PDO::FETCH_ASSOC) as $h) {
                            if ($h['horaire_day'] != $day) {
                                $day = $h['horaire_day'];
                                echo "<u><bold>" . $day . "</bold></u> :<br>";
                                if ($h['horaire_start'] == "0:00:00" and $h['horaire_end']) {
                                    echo "<p>FERMÉ | ";
                                } else {
                                    echo "<p>" . heureminute($h['horaire_start']) . " - " . heureminute($h['horaire_end']) . " | ";
                                }
                            } else {
                                if ($h['horaire_start'] == "0:00:00" and $h['horaire_end']) {
                                    echo " FERMÉ </p>";
                                } else {
                                    echo heureminute($h['horaire_start']) . " - " . heureminute($h['horaire_end']) . "</p>";
                                }
                            }
                            if ($h['horaire_day'] != 'dimanche' && $h['horaire_time'] == 'diner') {
                                echo "<hr></hr>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- End Main -->

    <!-- Footer -->
    <footer class="py-1 d-flex justify-content-around ">
        <div class="HoraireAujourdhui small">
            Horaire du jour : <br>
            <?php
            $today = JourdeSemaine();

            foreach ($pdo->query("SELECT * FROM `horaire` ORDER BY `horaire_id`", PDO::FETCH_ASSOC) as $h) {
                if ($h['horaire_day'] == $today && $h['horaire_time'] == 'dejeuner') {
                    echo "<p>" . heureminute($h['horaire_start']) . " - " . heureminute($h['horaire_end']) . " | ";
                }
                if ($h['horaire_day'] == $today && $h['horaire_time'] == 'diner') {
                    echo heureminute($h['horaire_start']) . " - " . heureminute($h['horaire_end']) . "</p>";
                }
            }
            ?>
        </div>
        <div class="Contact">
            <p class="small">
                Contact : <br>

                quaiantique@gmail.com
            </p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap CDN JS files -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>