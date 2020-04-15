<?php
require_once('model/login.model.php');
require_once('config/Securite.class.php');
require_once('config/config.php');

function getLogin() {
    $title = "Login";
    $alert = "";

    // Si il était déjà connecté
    if(Securite::verificationAcces()){
        header("Location: ?page=admin");
    }
    //Sinon, si il rentre un login & un mot de passe :
    else if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $login = Securite::secureHTML($_POST['login']);
        $password = Securite::secureHTML($_POST['password']);
        
        if(isConnexionValid($login, $password)) { //password verification
            $_SESSION['acces'] = "admin";
            Securite::generateCookiePassword();
            header("Location: ?page=admin");
        } else {
            $alert = "Identifiants invalides"; //Renvoi d'une alert à la view
        }

    } 
    require_once "views/back/login.view.php";
}

function getAdmin() {
    $title = "Page d'administration du site";

    if(isset($_POST['deconnexion']) && $_POST['deconnexion'] === "true") {
        session_destroy();
        header("Location: ?page=accueil");
    }

    if(Securite::verificationAcces()) { //Si l'utilisateur à le droit d'accéder à cette page
        Securite::generateCookiePassword(); // On re-génère un autre cookie afin de garder la connexion
        require_once "views/back/admin-accueil.view.php";
    } else {
        throw new Exception("Vous n'avez pas le droit d'accéder à cette page.");
    }
}

function getVoituresAdmin() {
    $title = "Page de gestion des voitures";

    if(Securite::verificationAcces()) { //Si l'utilisateur à le droit d'accéder à cette page
        Securite::generateCookiePassword(); // On re-génère un autre cookie afin de garder la connexion
        require_once "views/back/admin-voitures.view.php";
    } else {
        throw new Exception("Vous n'avez pas le droit d'accéder à cette page.");
    }
}

function getEditPage() {
    require_once "views/back/edit.view.php";
}

?>