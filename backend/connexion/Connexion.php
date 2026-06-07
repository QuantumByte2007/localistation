<?php

class Connexion {

    private $pdo;

    public function __construct() {
        $dsn  = "mysql:host=localhost;dbname=localisation;charset=utf8mb4";
        $user = "root";
        $pass = "";

        try {
            $this->pdo = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (Exception $ex) {
            die("Connexion échouée : " . $ex->getMessage());
        }
    }

    public function getConnexion() {
        return $this->pdo;
    }
}
