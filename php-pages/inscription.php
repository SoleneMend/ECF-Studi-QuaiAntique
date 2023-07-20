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
        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
                case 'success':
                ?>
                    <div class="alert alert-success">
                        <strong> Succès </strong> inscription réussie !
                    </div>
                <?php
                break;

                case 'passwords':
                ?>
                    <div class="alert alert-danger">
                        <strong> Erreur </strong> mot de passe différent
                    </div>
                <?php
                break;

                case 'length':
                ?>
                    <div class="alert alert-danger">
                        <strong> Erreur </strong> email ou nom trop long
                    </div>
                <?php
                break;
                
                case 'email':
                    ?>
                        <div class="alert alert-danger">
                            <strong> Erreur </strong> email non valide
                        </div>
                    <?php
                break;

                case 'already':
                    ?>
                        <div class="alert alert-danger">
                            <strong> Erreur </strong> compte déjà existant
                        </div>
                    <?php
                break;

                default:
                    break;
            }
        }

        ?>
        <div class="box border-box">
            <form action="inscription_code.php" method="post">
                <h4 class="text-center"><u>S'inscrire</u> :</h4>
                <div class="form-group">
                    <label for="name">Nom :</label> <br />
                    <input type="text" name="name" class="form-control" placeholder="Nom" required>
                </div><br />
                <div class="form-group">
                    <label for="mail">Email :</label> <br />
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div><br />
                <div class="form-group">
                    <label for="pass">Mot de passe :</label> <br />
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                </div><br />
                <div class="form-group">
                    <label for="pass">Confirmer le mot de passe :</label> <br />
                    <input type="password" name="password_retype" class="form-control" placeholder="Confirmer votre mot de passe" required>
                </div><br />
                <div class="text-center">
                    <button type="submit" class="btn btn-quaiAntique">Inscription</button>
                </div>
            </form>
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