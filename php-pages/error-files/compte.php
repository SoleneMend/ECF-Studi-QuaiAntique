<?php

if (isset($_GET['login_err']) && ($_GET['login_err']=='success')) {
    ?>
        <div class="alert alert-success">
            <strong> Succès </strong> Inscription reussie !
        </div>
    <?php
}

if (isset($_GET['role_err'])) {
    $err = htmlspecialchars($_GET['role_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> admin creer !
            </div>
        <?php
            break;

        case 'mail':
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

if (isset($_GET['role_err']) && ($_GET['role_err']=='success')) {
    ?>
        <div class="alert alert-success">
            <strong> Succès </strong> Connexion reussie !
        </div>
    <?php
}
