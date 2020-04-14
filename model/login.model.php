<?php
require_once "model/Database.model.php";

function getPasswordUser($login) {
    $pdo = Database::getPDO();
    $stmt = $pdo->prepare("SELECT * from administrateur WHERE login = :login");
    $stmt->bindValue(":login", $login, PDO::PARAM_STR);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $admin;
}

function isConnexionValid($login, $password) {
    $admin = getPasswordUser($login);
    return password_verify($password, $admin['password']);
}