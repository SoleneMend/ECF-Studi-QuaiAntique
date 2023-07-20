<?php
include "header.php";

session_start();
?>

    <!-- Reservation -->
    <main>
        <?php
            echo "<div class='box-alert border-box'>";
            if (isset($_GET['reserv_err'])) {
                $err = htmlspecialchars($_GET['reserv_err']);
    
                switch ($err) {
                    case 'success':
                    ?>
                        <div class="alert alert-success">
                            <strong> Succès </strong> inscription réussie !
                        </div>
                    <?php
                    break;
    
                    case 'size':
                    ?>
                        <div class="alert alert-danger">
                            <strong> Erreur </strong> il n'y a plus de place
                        </div>
                    <?php
                    break;
    
                    case 'time':
                    ?>
                        <div class="alert alert-danger">
                            <strong> Erreur </strong> horaire indisponible
                        </div>
                    <?php
                    break;
                    
                    case 'length':
                        ?>
                            <div class="alert alert-danger">
                                <strong> Erreur </strong> trop long
                            </div>
                        <?php
                    break;
    
                    case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong> Erreur </strong> vous avez deja reserver ce jour-ci
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
        <div class="box-reservation border-box">
            <form action="reservation.php" method="post">
                <h4 class="text-center"><u>Reservation </u> :</h4>
                <div class="d-flex justify-content-around">
                    <div class="form-group">
                        <label for="name">Nom :</label> <br>
                        <input type="text" name="name" class="form-control" placeholder="Entrer le nom" 
                        <?php 
                            if (isset($_SESSION['user'])) {
                                echo "value='".$_SESSION['user']['name']."'";
                            }
                        ?>
                        required>
                    </div> <br>
                    <div class="form-group">
                        <label for="convives">nombre de convives :</label> <br>
                        <input type="number" name="convives" class="form-control" placeholder="Entrer le nombre de convives"
                        <?php 
                            if (isset($_SESSION['user'])) {
                                echo "value='".$_SESSION['user']['convives']."'";
                            }
                        ?>
                        required>
                    </div> <br>
                </div>
                <div class="form-group">
                    <label for="mail">Mail :</label> <br />
                    <input type="email" name="mail" class="form-control" placeholder="Entrer le Mail"
                    <?php 
                        if (isset($_SESSION['user'])) {
                            echo "value='".$_SESSION['user']['mail']."'";
                        }
                    ?>
                    required>
                </div><br />
                <div class="d-flex justify-content-around">
                    <div class="form-group">
                        <label for="day">Jour :</label> <br>
                        <input type="date" name="day" class="form-control" placeholder="Entrer le jour" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="hour">Heure :</label> <br>
                        <input type="time" name="hour" class="form-control" placeholder="Entrer l'heure" required>
                    </div> <br>
                </div>
                <div class="form-group">
                    <label for="allergies">Allergies :</label> <br />
                    <input type="text" name="allergies" class="form-control" placeholder="Entrer les allergies"
                    <?php 
                        if (isset($_SESSION['user'])) {
                            echo "value='".$_SESSION['user']['allergies']."'";
                        }
                    ?>
                    >
                </div><br />
                <div class="text-center">
                    <button type="submit" class="btn btn-quaiAntique btn-lg">Reservé</button>
                </div>
            </form> 
        </div> <br> 
    </main>
    <!-- End Reservation -->

<?php

include "footer.php";

?>