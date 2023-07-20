<?php
session_start();

include '../mysql/connect.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="fr">

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
    <main>
        <div class="box border-box">
            <form action="modifier_password.php" method="post">
                <h5 class="text-center"><u>Modifer mot de passe</u> :</h5> <br>
                <div class="form-group">
                    <label for="old-password">Mot de passe :</label> <br>
                    <input type="password" name="old-password" class="form-control" placeholder="Entrer mot de passe" required>
                </div> <br>
                <div class="form-group">
                    <label for="new-password">Nouveau mot de passe :</label> <br>
                    <input type="password" name="new-password" class="form-control" placeholder="Entrer nouveau mot de passe" required>
                </div> <br>
                <div class="form-group">
                    <label for="new-retype-password">Confirmation mot de passe :</label> <br>
                    <input type="password" name="new-retype-password" class="form-control" placeholder="Confirmer nouveau mot de passe" required>
                </div> <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-quaiAntique">Modifer mot de passe</button>
                </div>
            </form>

            <hr>
            </hr>

            <form action="modifier_convives.php" method="post">
                <h5 class="text-center"><u>Modifier les convives </u> :</h5> <br>
                <div class="form-group">
                    <label for="convives">Nombre de Convives </label>
                    <input type="number" name="convives" class="form-control" placeholder="Entrer le nombre de convives" required>
                </div> <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-quaiAntique">Modifer convives </button>
                </div>
            </form>

            <hr>
            </hr>

            <form action="modifier_allergies.php" method="post">
                <h5 class="text-center"><u>Modifier les allergies </u> :</h5> <br>
                <div class="form-group">
                    <label for="allergies">Nombre de Allergies </label>
                    <input type="text" name="allergies" class="form-control" placeholder="Entrer les allergies">
                </div> <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-quaiAntique">Modifer allergies </button>
                </div>
            </form>
        </div> <br>

        <div class="text-center">
            <a href="compte.php" class="btn btn-quaiAntique btn-lg">Retour au compte</a>
        </div> <br>
    </main>

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