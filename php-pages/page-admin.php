<?php
include "header.php";

session_start();
?>

    <!-- Main -->
    <main>
        <div>
            <h1 class="text-center">Mode Admin :</h1> <br>

            <?php
            echo "<div class='box-alert border-box'>";
            include "error-files/page-admin.php";
            echo "</div>";
            ?>

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

            <!-- Horaires -->
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

<?php

include "footer.php";

?>