<?php

session_start();

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
    <link rel="stylesheet" href="../stylesheets/header.css" />
    <link rel="stylesheet" href="../stylesheets/footer.css" />
    <link rel="stylesheet" href="../stylesheets/button.css" />
    <link rel="stylesheet" href="../stylesheets/page-carte.css" />

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
                <a class="nav-link" href="#">Page d'accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
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

    <!-- Main -->
    <main>
        <div class="box">
            <?php
                foreach($pdo->query("SELECT * FROM carte", PDO::FETCH_ASSOC) as $carte)
                {
                    echo 
                        "<div>
                            <h5>
                             - <span class='title'> ".$carte['carte_name']."</span> :
                            <span class='prix'>".$carte['carte_price']."€</span>
                            </h5>
                            <span class='description'>".$carte['carte_description']."</span>
                        </div> <br>";
                }
            ?>
        </div> <br>
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