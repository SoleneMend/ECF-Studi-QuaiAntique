<?php
session_start();
if (!isset($_SESSION['user']))
    header('Location:connexion.php');

include '../mysql/connect.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="description" content="..." />
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
    <link rel="stylesheet" href="../stylesheets/page-comptes.css" />

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
        <div class="box-compte border-box">
            <div class="text-center">
                <h4><u>Mon compte</u> :</h4>
            </div>
            <div>
                <div>
                    <label for="name"><u>Nom</u> :</label> <br />
                    <div class="d-flex justify-content-between">
                        <a>
                            <?php
                            echo $_SESSION['user']['name'];
                            ?>
                        </a>
                    </div>
                </div><br />
                <div>
                    <label for="mail"><u>Email</u> :</label> <br />
                    <div class="d-flex justify-content-between">
                        <a>
                            <?php
                            echo $_SESSION['user']['mail'];
                            ?>
                        </a>
                    </div>
                </div><br />
                <div>
                    <label for="mail"><u>Mot de passe</u> :</label> <br />
                    <div class="d-flex justify-content-between">
                        <a>
                            <?php
                            echo $_SESSION['user']['password'];
                            ?>
                        </a>
                    </div>
                </div><br />
                <div>
                    <label for="mail"><u>Nombre de convives</u> :</label> <br />
                    <div class="d-flex justify-content-between">
                        <a>
                            <?php
                            echo $_SESSION['user']['convives'];
                            ?>
                        </a>
                    </div>
                </div><br />
                <div>
                    <label for="mail"><u>Allergie</u> :</label> <br />
                    <div class="d-flex justify-content-between">
                        <a>
                            <?php
                            echo $_SESSION['user']['allergies'];
                            ?>
                        </a>
                    </div>
                </div><br />
                <div class="d-flex justify-content-between">
                    <a href="deconnexion.php" class="btn btn-quaiAntique btn-lg">Déconnexion</a>
                    <a href="modifier-profil.php" class="btn btn-quaiAntique btn-lg">Modifier</a>
                </div>
            </div>
        </div> <br>

        <?php 
            if($_SESSION['user']['role'] == "ADMIN")
            {
                echo "
                    <div class='text-center'>
                        <a href='page-admin.php' class='btn btn-quaiAntique btn-lg'>Mode Admin</a>
                    </div> <br>
            
                    <div class='box border-box'>
                        <form action='creer_admin.php' method='post'>
                            <h5 class='text-center'><u>Modifier le role </u> :</h5> <br>
                            <div class='form-group'>
                                <label for='mail-role'> Email </label>
                                <input type='email' name='mail-role' class='form-control' placeholder='Entrer l'adresse mail' required>
                            </div> <br>
                            <div class='text-center'>
                                <button type='submit' class='btn btn-quaiAntique'>Changer de role </button>
                            </div>
                        </form>
                    </div> <br>
                    ";
            }
        ?>
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

                quaiAntique@gmail.com
            </p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap CDN JS files -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>

</html>