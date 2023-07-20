<?php 

// Image
if (isset($_GET['ajoutImage_err'])) {
    $err = htmlspecialchars($_GET['ajoutImage_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> image ajouter !
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
                <strong> Erreur </strong> image existe deja
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
} else if (isset($_GET['ModifieImage_err'])) {
    $err = htmlspecialchars($_GET['ModifieImage_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> image mise a jour !
            </div>
        <?php
        break;
        
        case 'url':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> probleme avec l'url
            </div>
        <?php
            break;

        case 'new-title':
        ?>
            <div class="alert alert-danger">
                    <strong> Erreur </strong> probleme avec le titre
                </div>
        <?php
            break;

        case 'ImageNotFound':
        ?>
                <div class="alert alert-danger">
                    <strong> Erreur </strong> image inexistante
                </div>
        <?php
            break;

            
        case 'incorrect':
        ?>
                <div class="alert alert-danger">
                    <strong> Erreur </strong> probleme avec le titre
                </div>
        <?php
            break;

        default:
            break;
    }

} else if (isset($_GET['SupprimeImage_err'])) {
    $err = htmlspecialchars($_GET['SupprimeImage_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> image supprimee !
            </div>
        <?php
        break;
        
        case 'doesntExist':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> image inexistante
            </div>
        <?php
            break;

        case 'title':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> probleme avec le nom
            </div>
        <?php
            break;

        default:
            break;
    }
}

// Reservation (Seuille maximal)
if (isset($_GET['Seuille_err'])) {
    $err = htmlspecialchars($_GET['Seuille_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> seuille maximal mise a jour !
            </div>
        <?php
        break;
        
        case 'same':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> meme valeur
            </div>
        <?php
            break;

        case 'notExist':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> horaire introuvable
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

// Menu
if (isset($_GET['ajoutMenu_err'])) {
    $err = htmlspecialchars($_GET['ajoutMenu_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> menu ajouter !
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
                <strong> Erreur </strong> nom existe deja
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
} else if (isset($_GET['ModifieMenu_err'])) {
    $err = htmlspecialchars($_GET['ModifieMenu_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> menu mise a jour !
            </div>
        <?php
        break;
        
        case 'desc':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> probleme avec la description
            </div>
        <?php
            break;

        case 'time':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> probleme avec l'horaire
            </div>
        <?php
            break;

        case 'time':
        ?>
                <div class="alert alert-danger">
                    <strong> Erreur </strong> probleme avec le prix
                </div>
        <?php
            break;

        case 'new-title':
        ?>
            <div class="alert alert-danger">
                    <strong> Erreur </strong> probleme avec le titre
                </div>
        <?php
            break;

        case 'MenuNotFound':
        ?>
                <div class="alert alert-danger">
                    <strong> Erreur </strong> menu inexistant
                </div>
        <?php
            break;

            
        case 'incorrect':
        ?>
                <div class="alert alert-danger">
                    <strong> Erreur </strong> probleme avec le titre
                </div>
        <?php
            break;

        default:
            break;
    }

} else if (isset($_GET['SupprimeMenu_err'])) {
    $err = htmlspecialchars($_GET['SupprimeMenu_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> menu supprime !
            </div>
        <?php
        break;
        
        case 'doesntExist':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> menu inexistante
            </div>
        <?php
            break;

        case 'title':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> probleme avec le nom
            </div>
        <?php
            break;

        default:
            break;
    }
}

// Carte
if (isset($_GET['ajoutCarte_err'])) {
    $err = htmlspecialchars($_GET['ajoutCarte_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> carte ajouter !
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
                <strong> Erreur </strong> nom existe deja
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
} else if (isset($_GET['ModifieCarte_err'])) {
    $err = htmlspecialchars($_GET['ModifieCarte_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> carte mise a jour !
            </div>
        <?php
        break;
        
        case 'desc':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> probleme avec la description
            </div>
        <?php
            break;

        case 'price':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> probleme avec le prix
            </div>
        <?php
            break;

        case 'new-title':
        ?>
            <div class="alert alert-danger">
                    <strong> Erreur </strong> probleme avec le titre
                </div>
        <?php
            break;

        case 'CarteNotFound':
        ?>
                <div class="alert alert-danger">
                    <strong> Erreur </strong> carte inexistante
                </div>
        <?php
            break;

            
        case 'incorrect':
        ?>
                <div class="alert alert-danger">
                    <strong> Erreur </strong> probleme avec le titre
                </div>
        <?php
            break;

        default:
            break;
    }

} else if (isset($_GET['SupprimeCarte_err'])) {
    $err = htmlspecialchars($_GET['SupprimeCarte_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> carte supprimee !
            </div>
        <?php
        break;
        
        case 'doesntExist':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> carte inexistante
            </div>
        <?php
            break;

        case 'title':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> probleme avec le nom
            </div>
        <?php
            break;

        default:
            break;
    }
}

// Horaires
if (isset($_GET['Horaires_err'])) {
    $err = htmlspecialchars($_GET['Horaires_err']);

    switch ($err) {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong> Succès </strong> horaires mise a jour !
            </div>
        <?php
        break;

        case 'notFound':
        ?>
            <div class="alert alert-danger">
                <strong> Erreur </strong> horaire introuvable
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