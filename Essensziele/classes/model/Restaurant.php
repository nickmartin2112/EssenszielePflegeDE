<?php
namespace classes\model;

class Restaurant{

    private $name;
    private $distance;
    private $price;
    private $veggie;
    private $address;

    /**
     * Restaurant constructor.
     * @param $name
     * @param $distance
     * @param $price
     * @param $veggie
     * @param Address $address
     */
    public function __construct($name, $distance, $price, $veggie, Address $address = null) {
        $this->name = $name;
        $this->distance = $distance;
        $this->price= $price;
        $this->veggie = $veggie;
        $this->address = $address;
    }

    /**
     * @param Address|null $address
     */
    public function setAddress(Address $address) {
        $this->address = $address;
    }


    public function __toString() {
        return $this->name . " | 💰 " . $this->price . " | 🚗 " . $this->distance . " | 🥦 " . $this->veggie;
    }


}