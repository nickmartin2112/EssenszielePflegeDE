<?php
namespace classes\mapper;

use classes\model\Address;

class AddressDAO{

    private $dbConnect;

    public function __construct() {
        $this->dbConnect = SQLDAOFactory::getInstance();
    }

    /**
     * @return array Priority
     */
    public function readAll() {
        $sql = "SELECT street_num, plz, ort FROM Address";
        $addressList = [];

        if (!$preStmt = $this->dbConnect->prepare($sql)) {
            echo "Fehler bei SQL-Vorbereitung (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
        } else {
            if (!$preStmt->execute()) {
                echo "Fehler beim Ausführen (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
            } else {
                if (!$preStmt->bind_result($street_num, $plz, $ort)) {
                    echo "Fehler beim Ergebnis-Binding (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
                } else {
                    while ($preStmt->fetch()) {
                        $address = new Address($street_num, $plz, $ort);
                        $addressList[] = $address;
                    }
                }
            }
            $preStmt->free_result();
            $preStmt->close();
            return $addressList;
        }
    }

    public function readByID($id) {

        $sql = "SELECT street_num, plz, ort FROM Address where addressID = ?";


        if (!$preStmt = $this->dbConnect->prepare($sql)) {
            echo "Fehler bei SQL-Vorbereitung (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
        } else {
            if (!$preStmt->bind_param($id)) {
                echo "Fehler beim Ausführen (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
            }else {
                if (!$preStmt->execute()) {
                    echo "Fehler beim Ausführen (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
                } else {
                    if (!$preStmt->bind_result($street_num, $plz, $ort)) {
                        echo "Fehler beim Ergebnis-Binding (" . $this->dbConnect->errno . ")" . $this->dbConnect->error . "<br>";
                    } else {
                        $preStmt->fetch();
                        $address = new Address($street_num, $plz, $ort);
                    }
                }
            }
        }
            $preStmt->close();
            return $address;
        }
}