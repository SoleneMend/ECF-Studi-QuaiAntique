<?php
include "header.php";

session_start();
?>
    <main>
        <?php
            echo "<div class='box-alert border-box'>";
            include "error-files/modifier-profil.php";
            echo "</div>";
        ?>

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

<?php

include "footer.php";

?>