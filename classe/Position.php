<?php

class Position {

    private $id;
    private $lat;
    private $lng;
    private $datePos;
    private $imei;

    public function __construct($id, $lat, $lng, $datePos, $imei) {
        $this->id      = $id;
        $this->lat     = $lat;
        $this->lng     = $lng;
        $this->datePos = $datePos;
        $this->imei    = $imei;
    }

    // --- Getters ---

    public function getId()        { return $this->id; }
    public function getLatitude()  { return $this->lat; }
    public function getLongitude() { return $this->lng; }
    public function getDatePosition() { return $this->datePos; }
    public function getImei()      { return $this->imei; }

    // --- Setters ---

    public function setId($val)           { $this->id      = $val; }
    public function setLatitude($val)     { $this->lat     = $val; }
    public function setLongitude($val)    { $this->lng     = $val; }
    public function setDatePosition($val) { $this->datePos = $val; }
    public function setImei($val)         { $this->imei    = $val; }
}
