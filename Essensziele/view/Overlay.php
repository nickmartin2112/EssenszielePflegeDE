<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/screen.css" rel="stylesheet">

    <title>WO / WAS ESSEN WIR DENN HEUTE?</title>

</head>
<body>

<div id="content">

    <h1 class="headline">WO / WAS ESSEN WIR DENN HEUTE?</h1>

    <form method="get" action="index.php">

        <h3 class="headline">Kategorie - FILTER</h3>
        <ul>
            <?php
            foreach ($catList as $category){
                echo "<li class='listPoint category'>" . $category->getDescription() . "</li>";
                echo "<input type='checkbox' hidden name='catIDList[]' class='catCheck' value='" . $category->getId() ."'>";
            }
            ?>
        </ul>

        <div id="postFilter">

            <div class="content">
                <h3 class="headline">Entfernung</h3>
                <ul>
                    <li class='listPoint distance'>Egal</li>
                    <input type='checkbox' hidden name='distanceID' value="*%">
                    <li class='listPoint distance'>nicht so weit weg</li>
                    <input type='checkbox' hidden name='distanceID' value="**%">
                    <li class='listPoint distance'>ganz nah dran</li>
                    <input type='checkbox' hidden name='distanceID' value="***">
                </ul>
            </div>

            <div class="content">
                <h3 class="headline">Preis</h3>
                <ul>
                    <li class='listPoint price'>Egal</li>
                    <input type='checkbox' hidden name='priceID' value="*%">
                    <li class='listPoint price'>nicht zu viel</li>
                    <input type='checkbox' hidden name='priceID' value="**%">
                    <li class='listPoint price'>Ende des Monats</li>
                    <input type='checkbox' hidden name='priceID' value="***">
                </ul>
            </div>
        </div>

        <div class="content">
            <h3 class="headline">Veggietauglich</h3>
            <ul>
                <li class='listPoint veggie'>Egal</li>
                <input type='checkbox' hidden name='veggieID' value="*%">
                <li class='listPoint veggie'>sollte schon schmecken</li>
                <input type='checkbox' hidden name='veggieID' value="**%">
                <li class='listPoint veggie'>muss ganz lecker sein</li>
                <input type='checkbox' hidden name='veggieID' value="***">
            </ul>
        </div>


        <h3 class="headline">Ergebnisse</h3>
        <div id="end">
            <div id="summary">
                <?php
                    if(isset($restaurantList)){
                        $counter = 1;
                        foreach ($restaurantList as $restaurant) {
                            echo $counter . ". " . $restaurant;
                            $counter++;
                        }
                    }
                ?>
            </div>

            <div id="buttons">
                <button type="reset" id="reset">Reset</button>
                <button type="submit" name="submit" id="reandomize">Randomize</button>
            </div>
        </div>
    </form>

</div>

<script src="./js/filter.js"></script>
<script src="./js/reset.js"></script>