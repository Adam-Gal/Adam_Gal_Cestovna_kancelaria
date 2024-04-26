<?php
    include_once("partials/head.php");
?>

<body>
    <?php
        include_once("partials/header.php");
    ?>
    <!-- Obsah stránky -->
    <div class="container">
        <br><br><br><br><br><br><br>
        <!-- Úvodný text -->
        <div class="text-center uvodny_text">
            <h1 id="nadpis" style="font-weight: bold;">Destinácie</h1>
        </div>
        <!-- Aktuálne destinácie -->
        <br><br><br>
        <div>
            <h1 class="aktualne_destinacie" style="margin-top: 4%">Aktuálne destinácie:</h1>
        </div>
        <?php
            $destinacia_object = new Destinacie();
            $destinacia = $destinacia_object->select();

            for($i=0; $i<count($destinacia); $i++) {
                echo '<div class="dest_pozadie">';
                echo '<div class="dest">';
                echo '<img src="' . $destinacia[$i]->fotka . '" class="img-thumbnail img-fluid dest_ob" alt="' . $destinacia[$i]->destinacia . '">';
                echo '<h1 class="nazov">' . $destinacia[$i]->destinacia . '</h1>';
                echo '</div>';
                echo '<button class="accordion">Zobraziť detaily</button>';
                echo '<div class="panel">';
                echo '<ul class="list-group list-group-flush">';
                echo '<li class="list-group-item"> <span class="text_vlavo">All inclusive. Dovolenka pre 1. osobu</span><span class="text_vpravo">' . $destinacia[$i]->cena1 . '€</span> </li>';
                echo '<li class="list-group-item"> <span class="text_vlavo">All inclusive. Dovolenka pre 2. ľudí</span><span class="text_vpravo">' . $destinacia[$i]->cena2 . '€</span> </li>';
                echo '<li class="list-group-item"> <span class="text_vlavo">All inclusive. Dovolenka pre 3. ľudí</span><span class="text_vpravo">' . $destinacia[$i]->cena3 . '€</span> </li>';
                echo '<li class="list-group-item"> <span class="text_vlavo">All inclusive. Dovolenka pre 4. ľudí</span><span class="text_vpravo">' . $destinacia[$i]->cena4 . '€</span> </li>';
                echo '<li class="list-group-item"> <span class="text_vlavo">All inclusive. Dovolenka pre 5. ľudí</span><span class="text_vpravo">' . $destinacia[$i]->cena5 . '€</span> </li>';
                echo '</ul>';
                echo '<div class="justify-content-center" style="display: flex">';
                echo '<div class="form-outline" style="width: 5.7rem; display: inline-block;" >';
                echo '<label class="form-label" style="white-space: nowrap; margin: 0 auto;">Počet ľudí:</label>';
                echo '<label> <input value="1" min="1" max="5" type="number" class="form-control"> </label>';
                echo '</div>';
                echo '<button onclick="myalert()" class="btn btn-primary dest_tlacidlo">Objednaj</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<br>';
            }
            echo '<br>';

            include_once("partials/footer.php");
        ?>