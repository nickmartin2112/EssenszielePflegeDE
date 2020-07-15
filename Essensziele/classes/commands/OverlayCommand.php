<?php

namespace classes\commands;

use classes\mapper\CategoryDAO;
use classes\mapper\RestaurantDAO;

class OverlayCommand{

    public function execute() {

        $catDAO = new CategoryDAO();
        $catList = $catDAO->readAll();

        if(isset($_REQUEST["submit"])){
            $restaurantDAO = new RestaurantDAO();
            $restaurantList = [];

            foreach ($_REQUEST["catIDList"] as $id){
                $restaurantList[] = $restaurantDAO->readByCatIDs($id, $_REQUEST["distanceID"], $_REQUEST["priceID"], $_REQUEST["veggieID"]);
            }
        }

        include_once "./view/Overlay.php";

    }
}