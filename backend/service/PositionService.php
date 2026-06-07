<?php

include_once __DIR__ . '/../dao/IDao.php';
include_once __DIR__ . '/../classe/Position.php';
include_once __DIR__ . '/../connexion/Connexion.php';

class PositionService implements IDao {

    private $db;

    public function __construct() {
        $cx = new Connexion();
        $this->db = $cx->getConnexion();
    }

    public function create($pos) {
        $requete = "INSERT INTO position (latitude, longitude, date_position, imei)
                    VALUES (:lat, :lng, :date_pos, :imei)";

        $stmt = $this->db->prepare($requete);
        $stmt->execute([
            ':lat'      => $pos->getLatitude(),
            ':lng'      => $pos->getLongitude(),
            ':date_pos' => $pos->getDatePosition(),
            ':imei'     => $pos->getImei()
        ]);
    }

    public function update($obj)  {}
    public function delete($obj)  {}
    public function getById($id)  {}
    public function getAll()      {}
}
