<?php
include "header.php";

session_start();
?>

    <!-- Main -->
    <main>
        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
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

<?php

include "footer.php";

?>