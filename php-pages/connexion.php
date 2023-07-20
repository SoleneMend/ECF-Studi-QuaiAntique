<?php
include "header.php";

session_start();
?>

    <!-- Main -->
    <main>
        <?php
        echo "<div class='box-alert border-box'>";
        if (isset($_GET['login_err'])) {
            $err = htmlspecialchars($_GET['login_err']);

            switch ($err) {
                case 'password':
                ?>
                    <div class="alert alert-danger">
                        <strong> Erreur </strong> mot de passe incorrect
                    </div>
                <?php
                    break;

                case 'email':
                ?>
                    <div class="alert alert-danger">
                        <strong> Erreur </strong> email incorrect
                    </div>
                <?php
                    break;

                case 'already':
                ?>
                    <div class="alert alert-danger">
                        <strong> Erreur </strong> compte inexistant
                    </div>
                <?php
                    break;

                case 'incorrect':
                ?>
                    <div class="alert alert-danger">
                        <strong> Erreur </strong> probleme avec les valeurs rentrees
                    </div>
                <?php
                    break;

                default:
                    break;
            }
        }
        echo "</div>";
        ?>
        <div class="box border-box">
            <form action="connexion_code.php" method="post">
                <h4 class="text-center"><u>Se connecter</u> :</h4>
                <div class="form-group">
                    <label for="mail">Email :</label> <br />
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div><br />
                <div class="form-group">
                    <label for="pass">Mot de passe :</label> <br />
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                </div><br />
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-quaiAntique" onclick="">Connexion</button>
                </div>
            </form>
        </div>
        <div class="py-1 text-center">
            <p>
                Pas de compte ?
                <a href="inscription.php" class="btn btn-quaiAntique btn-sm">Inscription</a>
            </p>
        </div>
    </main>
    <!-- End Main -->

<?php

include "footer.php";

?>