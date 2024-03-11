<!DOCTYPE html>
<html lang="sk">
<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Prepojenia a štýly -->
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Inline štýly -->
    <style>
        body {
            background: radial-gradient(circle, rgba(3,124,166,1) 0%, rgba(38,129,208,1) 60%, rgba(0,212,255,1) 100%);
        }
    </style>
    <!-- Názov stránky -->
    <title>Destnácie</title>
</head>

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
                <!-- Obrázkový slider s indikátormi -->
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/kontakt/img1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/kontakt/img2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/kontakt/img3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <!-- Ovládacie tlačidlá pre slider -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <br>
            <!-- Oddelovacia čiara -->
            <hr>
            <br><br>
            <h2 style="font-weight: bold;">Kontakty:</h2>
            <br><br>
            <!-- Kontaktné informácie pre rôzne pozície -->
            <div class="text-center justify-content-center">
                <div class="kontakty">
                    <h3 class="kto">Manažér</h3>
                    <p class="email_tel">E-mail Manažér: <a href="mailto:manazer@vias.sk">manazer@vias.sk</a></p>
                    <p class="email_tel">Tel. č. Manažér: <a href="tel:dovolenka@vias.sk">0904 372 965</a></p>
                </div>
                <div class="kontakty">
                    <h3 class="kto">Riaditel</h3>
                    <p class="email_tel">E-mail Riaditel: <a href="mailto:manazer@vias.sk">riaditel@vias.sk</a></p>
                    <p class="email_tel">Tel. č. Riaditel: <a href="tel:dovolenka@vias.sk">0904 386 764</a></p>
                </div>
                <div class="kontakty">
                    <h3 class="kto">Call Centrum:</h3>
                    <p class="email_tel">E-mail CallCentrum: <a href="mailto:dovolenka@vias.sk">dovolenka@vias.sk</a></p>
                    <p class="email_tel">Tel. č. CallCentrum: <a href="tel:dovolenka@vias.sk">0903 752 184</a></p>
                </div>
            </div>
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
    </div>
    <br><br>
    <!-- Päta stránky -->
    <?php
        include_once("partials/footer.php");
    ?>

    <!-- JavaScript skripty -->
    <script src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>