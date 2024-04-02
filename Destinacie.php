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
        <br>
        <!-- Aktuálne destinácie -->
        <br><br>
        <div>
            <h1 class="aktualne_destinacie">Aktuálne destinácie:</h1>
        </div>
        <!-- Prvá destinácia - Bali -->
        <div class="dest_pozadie">
            <div class="dest">
                <div>
                    <img src="img/destinacie/img1.jpg" class="img-thumbnail img-fluid dest_ob" alt="Bali">
                </div>
                <h1 class="nazov">Bali</h1>
            </div>
            <button class="accordion">Zobraziť detaily</button>
            <div class="panel">
                <!-- Detaily o destinácii -->
                <ul class="list-group list-group-flush">
                    <!-- Cenové možnosti pre rôzny počet ľudí -->
                    <li class="list-group-item">
                        <span class="text_vlavo">All inclusive. Dovolenka pre 1. osobu</span><span class="text_vpravo">500€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All inclusive. Dovolenka pre 2. ľudí</span><span class="text_vpravo">900€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All inclusive. Dovolenka pre 3. ľudí</span><span class="text_vpravo">1350€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All inclusive. Dovolenka pre 4. ľudí</span><span class="text_vpravo">1700€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All inclusive. Dovolenka pre 5. ľudí</span><span class="text_vpravo">2100€</span>
                    </li>
                </ul>
                <!-- Formulár na zadanie počtu ľudí a tlačidlo na objednanie -->
                <div class="justify-content-center" style="display: flex">
                    <div class="form-outline" style="width: 5.7rem; display: inline-block;" >
                        <label class="form-label" style="white-space: nowrap; margin: 0 auto;">Počet ľudí:</label>
                        <label>
                            <input value="1" min="1" max="5" type="number" class="form-control">
                        </label>
                    </div>
                    <button onclick="myalert()" class="btn btn-primary dest_tlacidlo">
                        Objednaj
                    </button>
                </div>
            </div>
        </div>
        <br>
        <!-- Druhá destinácia - Egypt -->
        <div class="dest_pozadie">
            <div class="dest">
                <div>
                    <img src="img/destinacie/img2.jpg" class="img-thumbnail img-fluid dest_ob" alt="Egypt">
                </div>
                <h1 class="nazov">Egypt</h1>
            </div>
            <button class="accordion">Zobraziť detaily</button>
            <div class="panel">
                <!-- Detaily o destinácii -->
                <ul class="list-group list-group-flush">
                    <!-- Cenové možnosti pre rôzny počet ľudí -->
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 1. osobu</span><span class="text_vpravo">450€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 2. ľudí</span><span class="text_vpravo">800€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 3. ľudí</span><span class="text_vpravo">1200€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 4. ľudí</span><span class="text_vpravo">1500€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 5. ľudí</span><span class="text_vpravo">1850€</span>
                    </li>
                </ul>
                <!-- Formulár na zadanie počtu ľudí a tlačidlo na objednanie -->
                <div class="justify-content-center" style="display: flex">
                    <div class="form-outline" style="width: 5.7rem; display: inline-block;" >
                        <label class="form-label" style="white-space: nowrap; margin: 0 auto;">Počet ľudí:</label>
                        <input value="1" min="1" max="5" type="number" class="form-control">
                    </div>
                    <button onclick="myalert()" class="btn btn-primary dest_tlacidlo">
                        Objednaj
                    </button>
                </div>
                
            </div>
        </div>
        <br>
        <!-- Tretia destinácia - Kanárske ostrovy -->
        <div class="dest_pozadie">
            <div class="dest">
                <div>
                    <img src="img/destinacie/img3.jpg" class="img-thumbnail img-fluid dest_ob" alt="Kanárske ostrovy">
                </div>
                <h1 class="nazov">Kanárske ostrovy</h1>
            </div>
            <button class="accordion">Zobraziť detaily</button>
            <div class="panel">
                <!-- Detaily o destinácii -->
                <ul class="list-group list-group-flush">
                    <!-- Cenové možnosti pre rôzny počet ľudí -->
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 1. osobu</span><span class="text_vpravo">600€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 2. ľudí</span><span class="text_vpravo">950€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 3. ľudí</span><span class="text_vpravo">1400€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 4. ľudí</span><span class="text_vpravo">1750€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 5. ľudí</span><span class="text_vpravo">2200€</span>
                    </li>
                </ul>
                <!-- Formulár na zadanie počtu ľudí a tlačidlo na objednanie -->
                <div class="justify-content-center" style="display: flex">
                    <div class="form-outline" style="width: 5.7rem; display: inline-block;" >
                        <label class="form-label" style="white-space: nowrap; margin: 0 auto;">Počet ľudí:</label>
                        <input value="1" min="1" max="5" type="number" class="form-control">
                    </div>
                    <button onclick="myalert()" class="btn btn-primary dest_tlacidlo">
                        Objednaj
                    </button>
                </div>
                
            </div>
        </div>
        <br>
        <!-- Štvrtá destinácia - Cyprus -->
        <div class="dest_pozadie">
            <div class="dest">
                <div>
                    <img src="img/img5.jpg" class="img-thumbnail img-fluid dest_ob" alt="Cyprus">
                </div>
                <h1 class="nazov">Cyprus</h1>
            </div>
            <button class="accordion">Zobraziť detaily</button>
            <div class="panel">
                <!-- Detaily o destinácii -->
                <ul class="list-group list-group-flush">
                    <!-- Cenové možnosti pre rôzny počet ľudí -->
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 1. osobu</span><span class="text_vpravo">700€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 2. ľudí</span><span class="text_vpravo">1400€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 3. ľudí</span><span class="text_vpravo">1950€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 4. ľudí</span><span class="text_vpravo">2400€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 5. ľudí</span><span class="text_vpravo">2800€</span>
                    </li>
                </ul>
                <!-- Formulár na zadanie počtu ľudí a tlačidlo na objednanie -->
                <div class="justify-content-center" style="display: flex">
                    <div class="form-outline" style="width: 5.7rem; display: inline-block;" >
                        <label class="form-label" style="white-space: nowrap; margin: 0 auto;">Počet ľudí:</label>
                        <input value="1" min="1" max="5" type="number" class="form-control">
                    </div>
                    <button onclick="myalert()" class="btn btn-primary dest_tlacidlo">
                        Objednaj
                    </button>
                </div>
                
            </div>
        </div>
        <br>
        <!-- Piata destinácia - Hawai -->
        <div class="dest_pozadie">
            <div class="dest">
                <div>
                    <img src="img/destinacie/img4.jpg" class="img-thumbnail img-fluid dest_ob" alt="Hawai">
                </div>
                <h1 class="nazov">Hawai</h1>
            </div>
            <button class="accordion">Zobraziť detaily</button>
            <div class="panel">
                <!-- Detaily o destinácii -->
                <ul class="list-group list-group-flush">
                    <!-- Cenové možnosti pre rôzny počet ľudí -->
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 1. osobu</span><span class="text_vpravo">1000€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 2. ľudí</span><span class="text_vpravo">1800€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 3. ľudí</span><span class="text_vpravo">2600€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 4. ľudí</span><span class="text_vpravo">3400€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 5. ľudí</span><span class="text_vpravo">4100€</span>
                    </li>
                </ul>
                <!-- Formulár na zadanie počtu ľudí a tlačidlo na objednanie -->
                <div class="justify-content-center" style="display: flex">
                    <div class="form-outline" style="width: 5.7rem; display: inline-block;" >
                        <label class="form-label" style="white-space: nowrap; margin: 0 auto;">Počet ľudí:</label>
                        <input value="1" min="1" max="5" type="number" class="form-control">
                    </div>
                    <button onclick="myalert()" class="btn btn-primary dest_tlacidlo">
                        Objednaj
                    </button>
                </div>
                
            </div>
        </div>
        <br>
        <!-- Šiesta destinácia - Maledivy -->
        <div class="dest_pozadie">
            <div class="dest">
                <div>
                    <img src="img/img6.jpg" class="img-thumbnail img-fluid dest_ob" alt="Maledivy">
                </div>
                <h1 class="nazov">Malorka</h1>
            </div>
            <button class="accordion">Zobraziť detaily</button>
            <div class="panel">
                <!-- Detaily o destinácii -->
                <ul class="list-group list-group-flush">
                    <!-- Cenové možnosti pre rôzny počet ľudí -->
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 1. osobu</span><span class="text_vpravo">350€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 2. ľudí</span><span class="text_vpravo">600€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 3. ľudí</span><span class="text_vpravo">1000€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 4. ľudí</span><span class="text_vpravo">1600€</span>
                    </li>
                    <li class="list-group-item">
                        <span class="text_vlavo">All incluzive. Dovolenka pre 5. ľudí</span><span class="text_vpravo">2100€</span>
                    </li>
                </ul>
                <!-- Formulár na zadanie počtu ľudí a tlačidlo na objednanie -->
                <div class="justify-content-center" style="display: flex">
                    <div class="form-outline" style="width: 5.7rem; display: inline-block;" >
                        <label class="form-label" style="white-space: nowrap; margin: 0 auto;">Počet ľudí:</label>
                        <input value="1" min="1" max="5" type="number" class="form-control">
                    </div>
                    <button onclick="myalert()" class="btn btn-primary dest_tlacidlo">
                        Objednaj
                    </button>
                
                    
                </div>
            </div>
        </div>
        <br>
        <?php
            include_once("partials/footer.php");
        ?>