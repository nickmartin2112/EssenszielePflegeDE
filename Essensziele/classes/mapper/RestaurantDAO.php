<?php
namespace classes\mapper;

use classes\model\Restaurant;

class RestaurantDAO{

    private $dbConnect;

    public function __construct() {
        $this->dbConnect = SQLDAOFactory::getInstance();
    }

    /**
     * @return array Priority
     */
    public function readAll() {
        $sql = "SELECT catID, description FROM Category";
        $catList = [];

        if (!$preStmt = $this->dbConnect->prepare($sql)) {
            echo "Fehler bei SQL-Vorbereitung (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
        } else {
            if (!$preStmt->execute()) {
                echo "Fehler beim Ausführen (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
            } else {
                if (!$preStmt->bind_result($catID, $description)) {
                    echo "Fehler beim Ergebnis-Binding (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
                } else {
                    while ($preStmt->fetch()) {
                        $category = new Category($catID, $description);
                        $catList[] = $category;
                    }
                }
            }
            $preStmt->free_result();
            $preStmt->close();
            return $catList;
        }
    }

    public function readByCatIDs($id, $distance, $price, $veggie) {

        $sql = "SELECT name, distance, price, Veggie, addressID FROM Restaurant where catID = ? and distance like ? and price like ? and Veggie like ?";
        $restaurantList = [];
        $addressIDList = [];

        if (!$preStmt = $this->dbConnect->prepare($sql)) {
            echo "Fehler bei SQL-Vorbereitung (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
        } else {
            if (!$preStmt->bind_param($id, $distance, $price, $veggie)) {
                echo "Fehler beim Ausführen (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
            }else {
                if (!$preStmt->execute()) {
                    echo "Fehler beim Ausführen (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
                } else {
                    if (!$preStmt->bind_result($name, $distance, $price, $Veggie, $addressID)) {
                        echo "Fehler beim Ergebnis-Binding (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
                    } else {
                        while ($preStmt->fetch()) {
                            $restaurant = new Restaurant($name, $distance, $price, $veggie);
                            $addressIDList[] = $addressID;
                            $restaurantList[] = $restaurant;
                        }
                        $preStmt->free_result();

                        $addressDAO = new AddressDAO();

                        for ($i = 0; $i < count($addressIDList) - 1; $i++){
                            $address = $addressDAO->readByID($addressIDList[$i]);
                            $restaurantList[$i]->setAddress($address);
                        }

                    }
                }
            }

            $preStmt->close();
            return $restaurantList;
        }
    }
}