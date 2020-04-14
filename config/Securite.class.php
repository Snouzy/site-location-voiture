<?php
class Securite {

    /**
     * @param mixed $string la string a échapper
     * 
     * @return str 
     */
    public static function secureHTML($string){
        return htmlentities($string);
    }

    /**
     * Génère un cookie avec un token unique pour éviter les vols de SESSION
     * @return void
     */
    public static function generateCookiePassword() {
            $ticket = session_id().microtime().rand(0,999999);
            $ticket = hash("sha512", $ticket);
            setcookie(dbInfos::COOKIE_PROTECT, $ticket, time() + (60 * 20));
            $_SESSION[dbInfos::COOKIE_PROTECT] = $ticket; // on assigne a $_SESSION['acces'] la valeur du cookie
    }


    /**
     * Vérifie que le cookie correspond au token créer pour éviter les vols de sessions
     * @return boolean
     */
    public static function verificationCookie() {
        if(isset($_SESSION[dbInfos::COOKIE_PROTECT]) &&
        $_COOKIE[dbInfos::COOKIE_PROTECT] === $_SESSION[dbInfos::COOKIE_PROTECT]){
            //Regénération d'un nouveau cookie
            Securite::generateCookiePassword();
            return true;
        } else {
            session_destroy();
            throw new Exception("Vous n'avez pas le droit d'être là");
        }
    }

    
    /**
     * Vérifie si un utilisateur était déjà connecté, que le cookie est 
     * @return boolean
     */ 
    public static function verificationAcces() {
        return isset($_SESSION['acces']) && !empty($_SESSION['acces']) && $_SESSION['acces'] === "admin" && self::verificationCookie();
    }
}