<?php
session_start();
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
        <div class="nav justify-content-end">
            <a class="nav-link" href="../index.php">Page d'accueil</a>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Head -->
    <header id="header">
        <div class="text-center mt-5 py-3">
            <img src="../assets/logo.png" width="700" height="130" class="img-fluid" alt="Responsive image" />
        </div>
    </header>
    <!-- End Head -->

    <!-- Main -->
    <main>
        <div>
            <h1 class="text-center">Mode Admin :</h1> <br>

            <!-- Galerie d'image -->
            <div class="box border-box">

                <h3 class="text-center"><u>Galerie d'image</u> :</h3>

                <hr>
                </hr>

                <form action="ajout_image.php" method="post">
                    <h4 class="text-center"><u>Ajouter image</u> :</h4>
                    <div class="form-group">
                        <label for="title">Titre :</label> <br>
                        <input type="text" name="title" class="form-control" placeholder="Entrer le titre" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="url">Lien du l'image :</label> <br>
                        <input type="text" name="url" class="form-control" placeholder="Entrer l'url de l'image" required>
                    </div> <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Ajout de l'image</button>
                    </div>
                </form>

                <hr>
                </hr>

                <form action="modifier_image.php" method="post">
                    <h4 class="text-center"><u>Modifier image</u> :</h4>
                    <div class="form-group">
                        <label for="title">Titre :</label> <br />
                        <input type="text" name="title" class="form-control" placeholder="Entrer titre" required>
                    </div><br />
                    <div class="form-group">
                        <label for="newTitle">Nouveau titre :</label> <br />
                        <input type="text" name="newTitle" class="form-control" placeholder="Entrer un nouveau titre">
                    </div><br />
                    <div class="form-group">
                        <label for="newUrl">Nouveau lien :</label> <br />
                        <input type="text" name="newUrl" class="form-control" placeholder="Entrer un nouveau lien">
                    </div><br />
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Modifier image</button>
                    </div>
                </form>

                <hr>
                </hr>

                <form action="supprimer_image.php" method="post">
                    <h4 class="text-center"><u>Supprimer image</u> :</h4>
                    <div class="form-group">
                        <label for="title">Titre :</label> <br />
                        <input type="text" name="title" class="form-control" placeholder="Entrer titre" required>
                    </div><br />
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Supprimer image</button>
                    </div>
                </form>
            </div> <br>

            <!-- Reservation -->
            <div class="box border-box">

                <h3 class="text-center"><u>Reservation</u> :</h3>

                <hr>
                </hr>

                <form action="modifier_seuille_max.php" method="post">
                    <h4 class="text-center"><u>Seuile maximum</u> :</h4>
                    <div class="form-group">
                        <label for="day">Entrer Jour :</label> <br />
                        <input type="text" name="day" class="form-control" placeholder="Entrer le jour" required>
                    </div><br />
                    <div class="form-group">
                        <label for="time"> Moment de la journée : </label> <br />
                        <input type="text" name="time" class="form-control" placeholder="dejeuner ou diner" required>
                    </div><br />
                    <div class="form-group">
                        <label for="seuille">Nouveau seuille :</label> <br />
                        <input type="number" name="seuille" class="form-control" placeholder="Entrer seuille maximun" required>
                    </div><br />
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Modifier Seuille maximum</button>
                    </div>
                </form>
            </div> <br>

            <!-- Menu -->
            <div class="box border-box">

                <h3 class="text-center"><u>Menu</u> :</h3>

                <hr>
                </hr>

                <form action="ajout_menu.php" method="post">

                    <h4 class="text-center"><u>Ajouter menu</u> :</h4>
                    <div class="form-group">
                        <label for="title">Titre :</label> <br>
                        <input type="text" name="title" class="form-control" placeholder="Entrer le titre" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="description">Description :</label> <br>
                        <input type="text" name="description" class="form-control" placeholder="Entrer la description" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="horaires">Horaires :</label> <br>
                        <input type="text" name="horaires" class="form-control" placeholder="Entrer les horaires" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="prix">Prix :</label> <br />
                        <input type="number" name="prix" class="form-control" placeholder="Entrer le prix" required>
                    </div><br />
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Ajout du menu</button>
                    </div>
                </form>

                <hr>
                </hr>

                <form action="modifier_menu.php" method="post">
                    <h4 class="text-center"><u>Modifier menu</u> :</h4>
                    <div class="form-group">
                        <label for="title">Titre :</label> <br>
                        <input type="text" name="title" class="form-control" placeholder="Entrer le titre" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="newTitle">Nouveau Titre :</label> <br>
                        <input type="text" name="newTitle" class="form-control" placeholder="Entrer le nouveau titre">
                    </div> <br>
                    <div class="form-group">
                        <label for="description">Description :</label> <br>
                        <input type="text" name="description" class="form-control" placeholder="Entrer la nouveau description">
                    </div> <br>
                    <div class="form-group">
                        <label for="horaires">Horaires :</label> <br>
                        <input type="text" name="horaires" class="form-control" placeholder="Entrer les nouveaux horaires">
                    </div> <br>
                    <div class="form-group">
                        <label for="prix">Prix :</label> <br />
                        <input type="number" name="prix" class="form-control" placeholder="Entrer le nouveau prix">
                    </div><br />
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Modifier menu</button>
                    </div>
                </form>

                <hr>
                </hr>

                <form action="supprimer_menu.php" method="post">
                    <h4 class="text-center"><u>Supprimer menu</u> :</h4>
                    <div class="form-group">
                        <label for="title">Titre :</label> <br />
                        <input type="text" name="title" class="form-control" placeholder="Entrer titre" required>
                    </div><br />
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Supprimer menu</button>
                    </div>
                </form>
            </div> <br>

            <!-- Carte -->
            <div class="box border-box">

                <h3 class="text-center"><u>Carte</u> :</h3>

                <hr>
                </hr>

                <form action="ajout_carte.php" method="post">

                    <h4 class="text-center"><u>Ajouter carte</u> :</h4>
                    <div class="form-group">
                        <label for="title">Titre :</label> <br>
                        <input type="text" name="title" class="form-control" placeholder="Entrer le titre" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="description">Description :</label> <br>
                        <input type="text" name="description" class="form-control" placeholder="Entrer la description" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="prix">Prix :</label> <br />
                        <input type="number" name="prix" class="form-control" placeholder="Entrer le prix" required>
                    </div><br />
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Ajout de la carte</button>
                    </div>
                </form>

                <hr>
                </hr>

                <form action="modifier_carte.php" method="post">
                    <h4 class="text-center"><u>Modifier carte</u> :</h4>
                    <div class="form-group">
                        <label for="title">Titre :</label> <br>
                        <input type="text" name="title" class="form-control" placeholder="Entrer le titre" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="newTitle">Nouveau Titre :</label> <br>
                        <input type="text" name="newTitle" class="form-control" placeholder="Entrer le nouveau titre">
                    </div> <br>
                    <div class="form-group">
                        <label for="description">Description :</label> <br>
                        <input type="text" name="description" class="form-control" placeholder="Entrer la nouveau description">
                    </div> <br>
                    <div class="form-group">
                        <label for="prix">Prix :</label> <br />
                        <input type="number" name="prix" class="form-control" placeholder="Entrer le nouveau prix">
                    </div><br />
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Modifier carte</button>
                    </div>
                </form>

                <hr>
                </hr>

                <form action="supprimer_carte.php" method="post">
                    <h4 class="text-center"><u>Supprimer carte</u> :</h4>
                    <div class="form-group">
                        <label for="title">Titre :</label> <br />
                        <input type="text" name="title" class="form-control" placeholder="Entrer titre" required>
                    </div><br />
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Supprimer carte</button>
                    </div>
                </form>
            </div> <br>

            <!-- Reservation -->
            <div class="box border-box">

                <h3 class="text-center"><u>Horaire</u> :</h3>

                <hr>
                </hr>

                <form action="modifier_carte.php" method="post">
                    <h4 class="text-center"><u>Modifier horaires</u> :</h4>
                    <div class="form-group">
                        <label for="day">Jour :</label> <br>
                        <input type="text" name="day" class="form-control" placeholder="Entrer le jour" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="time">Moment de la journée :</label> <br>
                        <input type="text" name="time" class="form-control" placeholder="dejeuner/ diner" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="start">Debut :</label> <br>
                        <input type="time" name="start" class="form-control" placeholder="Entrer l'heure de debut" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="end">Fin :</label> <br />
                        <input type="time" name="end" class="form-control" placeholder="Entrer l'heure de fin" required>
                    </div><br />
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Modifier horaires</button>
                    </div>
                </form>
            </div> <br>
        </div>
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
                Contact
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