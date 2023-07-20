<?php 

// Mot de passe
if (isset($_GET['password_err'])) {
    $err = htmlspecialchars($_GET['password_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> mot de passe mise a jour !
            </div>
        <?php
        break;
        
        case 'same':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> nouveau mot de passe est le meme que l'ancien
            </div>
        <?php
            break;

        case 'notsame':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> vous n'avez pas bien confirmer le mot de passe
            </div>
        <?php
            break;

        case 'old':
        ?>
            <div class="alert alert-danger">
                    <strong> Erreur </strong> l'ancien mot de passe ne correspond pas
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

// Convives
if (isset($_GET['convives_err'])) {
    $err = htmlspecialchars($_GET['convives_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> nombre de convives mise a jour !
            </div>
        <?php
            break;
        
        case 'same':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> nouveau nombre de convives est le meme que l'ancien
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

// Convives
if (isset($_GET['allergies_err'])) {
    $err = htmlspecialchars($_GET['allergies_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> allergies mise a jour !
            </div>
        <?php
        break;
        
        case 'same':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> allergies est le meme que l'ancien
            </div>
        <?php
            break;
        
        case 'length':
        ?>
                <div class="alert alert-danger">
                    <strong> Erreur </strong> valeurs trop grande
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