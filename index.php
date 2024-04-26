<?php
    include_once("partials/head.php");
?>

<body>
    <?php
        include_once("partials/header.php");
    ?>
    <!-- Hlavná sekcia obsahu -->
    <div class="container">
        <!-- Úvodný obrázok -->
        <img src="img/index-img.jpg" style="z-index: -1;" alt="úvodný obrázok" class="pozadie bg-image" loading="eager">
        <br><br><br><br><br><br><br>

        <!-- Úvodný text -->
        <div class="text-center uvodny_text">
            <h1 id="nadpis">Cestovná kancelária Vias</h1>
        </div>
        <br><br><br>

        <?php
            $special_object = new Special();
            $special = $special_object->select();

            if(count($special) <= 3) $pocet = count($special);
            else $pocet = 3;

            echo '<div class="obrazky d-flex flex-column justify-content-center d-md-none">';
            for ($i=0; $i < $pocet ; $i++) {
                echo '<div class="obrazok">';
                echo '<img src="'.$special[$i]->fotka.'" alt="'.$special[$i]->destinacia.'" style="border-radius: 20px;" class="img-thumbnail mb-2">';
                echo '<h1 class="ponuka">'.$special[$i]->destinacia.'</h1>';
                echo '<br>';
                echo '<p class="text_uputavka">'.$special[$i]->text.'</p>';
                echo '<br>';
                echo '<div class="obj">';
                echo '<a href="destinacie.php" class="objednaj">Objednaj TU !!!</a>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';

            echo '<div class="container obrazky text-center d-none d-md-flex justify-content-center" style="max-width: 80%; font-size: 1.5cap;">';
            for ($i=0; $i < $pocet ; $i++) {
                echo '<div class="obrazok mx-4">';
                echo '<img src="'.$special[$i]->fotka.'" alt="'.$special[$i]->destinacia.'" style="border-radius: 20px;" class="img-thumbnail img-sm">';
                echo '<h1 class="ponuka">'.$special[$i]->destinacia.'</h1>';
                echo '<br>';
                echo '<p class="text_uputavka">'.$special[$i]->text.'</p>';
                echo '<br>';
                echo '<div class="obj">';
                echo '<a href="destinacie.php" class="objednaj">Objednaj TU !!!</a>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';

            echo '<br><br><br><br>';

            $novinky_object = new Novinky();
            $clanok = $novinky_object->select();

            echo '<div> <h1 id="novinky">Novinky:</h1> </div>';
            for ($i=0; $i < count($clanok) ; $i++) {
                echo '<div class="clanok">';
                echo ' <div> <img src="'.$clanok[$i]->obrazok.'" style="border-radius: 5px;" class="img-thumbnail img-fluid" alt="Článok '.($i+1).'"> </div>';
                echo '<div class="sprava"> <h2>'.$clanok[$i]->nadpis.'</h2> <p>'.$clanok[$i]->text.'</p> </div>';
                echo '</div>';
            }
            echo '</div>';
        ?>

        <!-- Kreatívny bod - Cookies a Popup -->
        <div class="cookie-consent">
            <p class="cookie-text">Táto stránka používa súbory
                <span class="popup" onclick="popup()">cookies
                    <span class="popuptext" id="myPopup">Súbory na zaznamenávanie aktivít na webstránke</span>
                </span>
            </p>
            <div class="mt-2 d-flex align-items-center justify-content-center g-2">
                <button class="allow-button" onclick="skrytDiv()">Prijať</button>
                <button class="deny-button" onclick="skrytDiv()">Odmietnuť</button>
            </div>
        </div>        
        
        <?php
            include_once("partials/footer.php");
        ?>

