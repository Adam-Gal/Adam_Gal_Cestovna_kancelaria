<?php
    include_once("partials/head.php");
?>

<body>
    <?php
        include_once("partials/header.php");
    ?>
    <!-- Hlavný obsah stránky -->
    <div class="container">
        <br><br><br><br><br><br><br>
        <!-- Úvodný text -->
        <div class="text-center uvodny_text">
            <h1 id="nadpis" style="font-weight: bold;">Kontakt</h1>
        </div>
        <br><br><br>
        
        <!-- Sekcia s kontaktnými informáciami -->
        <div class="kontakt">
            <!-- Adresa a obrázkový slider -->
            <div class="clanok">
                <div>
                    <h2 class="adresa">Adresa:</h2>
                    <br>
                    <p class="adr">Bratislavská 29</p>
                    <p class="adr">949 01 Nitra</p>
                    <a href="https://www.google.sk/maps/place/Bratislavsk%C3%A1+29,+949+01+Nitra/@48.3145157,18.0592887,17z/data=!3m1!4b1!4m6!3m5!1s0x476b3f140c555685:0x241b1a01a40bb4cd!8m2!3d48.3145122!4d18.0618636!16s%2Fg%2F11vl3939l6?hl=sk&entry=ttu" class="btn btn-secondary" style="margin-bottom: 20px;">Pozrieť na mape</a>
                </div>
                <?php
                    $kontakty_object = new Kontakty();
                    $kontakty = $kontakty_object->select_kontakty();
                    $obrazky = $kontakty_object->select_obrazky();

                    echo '<div id="carouselExampleIndicators" class="carousel slide">';
                    echo '<div class="carousel-indicators">';
                    for ($i = 0; $i < count($obrazky); $i++) {
                        if ($i == 0) echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
                        else echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$i.'" aria-label="Slide '.($i+1).'"></button>';
                    }
                    echo '</div>';
                    echo '<div class="carousel-inner">';
                    for ($i = 0; $i < count($obrazky); $i++) {
                        if ($i == 0) echo '<div class="carousel-item active"> <img src="'.$obrazky[$i]->obrazok.'" class="d-block w-100" alt="obrazok1"> </div>';
                        else echo '<div class="carousel-item"> <img src="'.$obrazky[$i]->obrazok.'" class="d-block w-100" alt="obrazok'.($i+1).'"> </div>';
                    }
                    echo '</div>';
                    echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>';
                    echo '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>';
                    echo '</div>';
                ?>

            </div>
            <br>
            <hr>
            <br><br>
            <h2 style="font-weight: bold;">Kontakty:</h2>
            <br><br>
            <?php


                echo '<div class="text-center justify-content-center">';
                for ($i = 0; $i < count($kontakty); $i++) {
                    echo '<div class="kontakty">';
                    echo '<h3 class="kto">'.$kontakty[$i]->adresat.'</h3>';
                    echo '<p class="email_tel">E-mail '.$kontakty[$i]->adresat.': <a href="mailto:'.$kontakty[$i]->email.'">'.$kontakty[$i]->email.'</a></p>';
                    echo '<p class="email_tel">Tel. č. '.$kontakty[$i]->adresat.': <a href="tel:'.$kontakty[$i]->tel_c.'">'.$kontakty[$i]->tel_c.'</a></p>';
                    echo '</div>';
                }
                echo '</div>';
            ?>
        </div>
        <br><br><hr><br><br>
        <!-- Formulár pre odoslanie správy -->
        <div class="formular_pozadie">
            <h2 class="text-center formular_nadpis">Napíšte nám</h2>
            <br><br>
            <form class="formular">
                <div class="form-group justify-content-center">
                    <label class="formular_label">Meno a priezvisko</label>
                    <input type="text" class="form-control formular_input">
                </div>
                <div class="form-group">
                    <label class="formular_label">E-mail</label>
                    <input type="email" id="emailInput" class="form-control formular_input" placeholder="meno@mail.com">
                </div>
                <div class="form-group">
                    <label class="formular_label">Požiadavka</label>
                    <textarea class="form-control formular_textarea" rows="3"></textarea>
                </div>
                <!-- Checkbox pre súhlas so spracovaním osobných údajov -->
                <div class="form-check">
                    <input type="checkbox" id="consentCheckbox" class="form-check-input formular_input">
                    <label class="form-check-label formular_input">Súhlas so spracovaním osobných údajov</label>
                </div>                
                <!-- Tlačidlo pre odoslanie formulára -->
                <button id="odoslat" type="button" class="btn btn-primary" onclick="validateAndOpen()">Odoslať</button>
            </form>
        </div>
    <br><br>
    <!-- Päta stránky -->
    <?php
        include_once("partials/footer.php");
    ?>
