<?php
namespace classes\model;

class Address{
    private $street_num;
    private $plz;
    private $ort;

    /**
     * Address constructor.
     * @param $street_num
     * @param $plz
     * @param $ort
     */
    public function __construct($street_num, $plz, $ort) {
        $this->street_num = $street_num;
        $this->plz = $plz;
        $this->ort = $ort;
    }

    public function __toString() {
        return $this->street_num . ", " . $this->plz . " " . $this->ort;
    }


}