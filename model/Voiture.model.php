<?php 
require_once "model/Database.model.php";

class VoitureManager {

    public static function getAllCars() {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare("SELECT * from voiture");
        $stmt->execute();
        $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $cars;
    }

    public static function getCarById($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare("SELECT * from voiture WHERE id=:id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $car = $stmt->fetch(PDO::FETCH_ASSOC);
        return $car;
    }

    public static function getImagesVoiture($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare(
            "SELECT url_image FROM image
            INNER JOIN voiture_has_image vhs
            ON image.id = vhs.image_id
            INNER JOIN voiture v ON vhs.voiture_id = v.id
            WHERE v.id = :id "
        );
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public static function getStatutFromDB($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare(
            " SELECT libelle_statut
            FROM statut s
            INNER JOIN voiture v
            ON v.Statut_id = s.id
            WHERE v.id = :id "
        );
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch();
        return $res['libelle_statut'];
    }
    public static function getTypeFromDB($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare(
            " SELECT libelle_type
            FROM type t
            INNER JOIN voiture v
            ON v.Type_id = t.id
            WHERE v.id = :id "
        );
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch();
        return $res['libelle_type'];
    }

    public static function getMotorisationFromDB($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare(
            "SELECT libelle_motorisation
            FROM motorisation m 
            INNER JOIN voiture v
            ON v.Motorisation_id = m.id
            WHERE v.id = :id"
        );
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['libelle_motorisation'];
    }

    public static function getBoiteFromDB($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare(
            "SELECT libelle_boite
            FROM boite b
            INNER JOIN voiture v
            ON v.Boite_id = b.id
            WHERE v.id = :id"
        );
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['libelle_boite'];
    }
    public static function getBluetoothFromDB($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare(
            "SELECT version
            FROM bluetooth b
            INNER JOIN voiture v
            ON v.Bluetooth_id = b.id
            WHERE v.id = :id"
        );
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['version'];
    }
    public static function getClimatisationFromDB($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare(
            "SELECT has_climatisation
            FROM climatisation c
            INNER JOIN voiture v
            ON v.Climatisation_id = c.id
            WHERE v.id = :id"
        );
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['has_climatisation'];
    }

    public static function getNbPortesFromDB($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare(
            "SELECT nombre
            FROM nb_portes nbp
            INNER JOIN voiture v
            ON v.Nb_portes_id = nbp.id
            WHERE v.id = :id"
        );
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['nombre'];
    }

    public static function getGPSFromDB($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare(
            "SELECT libelle
            FROM gps
            INNER JOIN voiture v
            ON v.Gps_id = gps.id
            WHERE v.id = :id"
        );
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['libelle'];
    }
    
    public static function getMarqueFromDB($id) {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare(
            "SELECT *
            FROM marque m
            INNER JOIN voiture v
            ON v.Marque_id = m.id
            WHERE v.id = :id"
        );
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['libelle_marque'];
    }
}