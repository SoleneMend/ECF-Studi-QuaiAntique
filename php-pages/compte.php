<?php
include "header.php";

session_start();
if (!isset($_SESSION['user']))
    header('Location:connexion.php');
?>

    <!-- Main -->
    <main>
    <?php
        echo "<div class='box-alert border-box'>";
        include "error-files/compte.php";
        echo "</div>";
        ?>
        <div class="box border-box">
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
                            <h5 class='text-center'><u>Modifier le role</u> :</h5> <br>
                            <div class='form-group'>
                                <label for='mail-role'> Email </label>
                                <input type='email' name='mail-role' class='form-control' placeholder='Entrer adresse mail' required>
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

<?php

include "footer.php";

?>