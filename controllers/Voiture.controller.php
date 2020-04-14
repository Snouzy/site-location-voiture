<?php

require_once "model/Voiture.model.php";
class Voiture {
    private $id;
    private $modele;
    private $description;
    private $annee;
    private $chevaux;
    private $prix;
    private $statut;
    private $type;
    private $motorisation;
    private $boite;
    private $bluetooth;
    private $climatisation;
    private $nbPortes;
    private $gps;
    private $images = [];
    
    public static $allVoitures = [];
    public static $isAlreadyFetch = null;

    public function __construct($id, $modele, $description, $annee, $chevaux, $prix, $statut, $type, $marque, $motorisation, $boite, $bluetooth, $climatisation, $nbPortes, $gps, $images) {
        $this->id = $id;
        $this->modele = $modele;
        $this->description = $description;
        $this->annee = $annee;
        $this->chevaux = $chevaux;
        $this->prix = $prix;
        $this->statut = $statut;
        $this->type = $type;
        $this->marque = $marque;
        $this->motorisation = $motorisation;
        $this->boite = $boite;
        $this->bluetooth = $bluetooth;
        $this->climatisation = $climatisation;
        $this->nbPortes = $nbPortes;
        $this->gps = $gps;
        $this->images = $images;
        self::$allVoitures[] = $this;
    }

    /**
     * if the DB has already been called, return all the cars from the array
     * else it create a request on the DB
     * @return arr 
     */
    public static function getAllCarsWithLabels() {
        if(self::$isAlreadyFetch) {
            return self::$allVoitures;
        } else {
            foreach(VoitureManager::getAllCars() as $voiture) {
                $statut = VoitureManager::getStatutFromDB($voiture['id']);
                $type = VoitureManager::getTypeFromDB($voiture['id']);;
                $marque = VoitureManager::getMarqueFromDB($voiture['id']);
                $motorisation = VoitureManager::getMotorisationFromDB($voiture['id']);
                $boite = VoitureManager::getBoiteFromDB($voiture['id']); ;
                $bluetooth = VoitureManager::getBluetoothFromDB($voiture['id']);;
                $climatisation = VoitureManager::getClimatisationFromDB($voiture['id']);
                $nbPortes = VoitureManager::getNbPortesFromDB($voiture['id']);
                $gps = VoitureManager::getGPSFromDB($voiture['id']);
                $images = VoitureManager::getImagesVoiture($voiture['id']);
                new Voiture($voiture['id'], $voiture['modele'], $voiture['description'], $voiture['annee'], $voiture['chevaux'], $voiture['prix_journalier'], $statut, $type, $marque, $motorisation, $boite, $bluetooth, $climatisation, $nbPortes, $gps, $images);
            }
            self::$isAlreadyFetch = true;
            return self::$allVoitures;
        }
    }
    //Getters
    public function getId() { return $this->id; }
    public function getModele() { return $this->modele; }
    public function getDescription() { return $this->description; }
    public function getAnnee() { return $this->annee; }
    public function getChevaux() { return $this->chevaux; }
    public function getPrixJournalier() { return $this->prix; }
    public function getStatut(){ return $this->statut; }
    public function getType() { return $this->type; }
    public function getMarque() { return $this->marque; }
    public function getMotorisation() { return $this->motorisation; }
    public function getBoite() { return $this->boite; }
    public function getBluetooth() { return $this->bluetooth; }
    public function getClimatisation() { return $this->climatisation; }
    public function getNbPortes() { return $this->nbPortes; }
    public function getGPS() { return $this->gps; }
    public function getImages() { return $this->images; }
}