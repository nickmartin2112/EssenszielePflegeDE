<?php
namespace classes\mapper;

use classes\model\Category;

class CategoryDAO{

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
}