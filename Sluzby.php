<?php
    include_once("partials/head.php");
?>

<body>
    <?php
        include_once("partials/header.php");
    ?>
    <div class="container">
        <br><br><br><br><br><br><br>
        <div class="text-center uvodny_text">
            <h1 id="nadpis">Služby</h1>
        </div>
        <br><br><br>
        <!-- Zoznam služieb -->
        <div class="zoznam">
            <table class="table caption-top">
                <caption>List služieb:</caption>
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Služba</th>
                    <th scope="col">Popis služby</th>
                    <th scope="col">Pridať</th>
                  </tr>
                </thead>
                <tbody>
                    <!-- Služba 1 -->
                    <tr>
                        <th class="align-middle" scope="row">1</th>
                        <td class="align-middle">Rezervácia leteniek:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Medzinárodné lety</li>
                                <li>Vnútroštátne lety</li>
                                <li>Last-minute ponuky</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;">
                            <button id="btn1" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button>
                        </td>
                    </tr>
                    <!-- Služba 2 -->
                    <tr>
                        <th class="align-middle" scope="row">2</th>
                        <td class="align-middle">Ubytovanie:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Hotely</li>
                                <li>Apartmány</li>
                                <li>Hostely</li>
                                <li>Rezervácia dovolenkových domov</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn2" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 3 -->
                    <tr>
                        <th class="align-middle" scope="row">3</th>
                        <td class="align-middle">Preprava:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Autopožičovňa</li>
                                <li>Transfer z letiska</li>
                                <li>MHD v cieľovej destinácii</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn3" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 4 -->
                    <tr>
                        <th class="align-middle" scope="row">4</th>
                        <td class="align-middle">Turistické balíčky:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Výlety a exkurzie</li>
                                <li>Skupinové a individuálne zájazdy</li>
                                <li>Kultúrne a dobrodružné programy</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn4" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 5 -->
                    <tr>
                        <th class="align-middle" scope="row">5</th>
                        <td class="align-middle">Poistenie:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Cestovné poistenie</li>
                                <li>Zdravotné poistenie</li>
                                <li>Poistenie zrušenia</li>
                            </ul>
                        </td>
                        <td class="align-middle" style="width: 15%;"><button id="btn5" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 6 -->
                    <tr>
                        <th class="align-middle" scope="row">6</th>
                        <td class="align-middle">Víza a iné formality:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Pomoc s vízami</li>
                                <li>Iné povinné formality</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn6" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 7 -->
                    <tr>
                        <th class="align-middle" scope="row">7</th>
                        <td class="align-middle">Technická podpora:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>24/7 zákaznícka podpora</li>
                                <li>Mobilné aplikácie a informačné systémy pre zákazníkov</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn7" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 8 -->
                    <tr>
                        <th class="align-middle" scope="row">8</th>
                        <td class="align-middle">Event Management:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Organizácia konferencií a podujatí</li>
                                <li>Team-building akcie</li>
                                <li>Svadobné plánovanie destinácií</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn8" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 9 -->
                    <tr>
                        <th class="align-middle" scope="row">9</th>
                        <td class="align-middle">Jazykové služby:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Priradenie sprievodcu v cudzom jazyku</li>
                                <li>Preklady dokumentov</li>
                                <li>Komunikačná asistencia</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn9" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 10 -->
                    <tr>
                        <th class="align-middle" scope="row">10</th>
                        <td class="align-middle">Cestovné poradenstvo:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Odporúčania pre destinácie</li>
                                <li>Špecializované odporúčania pre rodiny, páry, dobrodruhov</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn10" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 11 -->
                    <tr>
                        <th class="align-middle" scope="row">11</th>
                        <td class="align-middle">Špeciálne služby pre firemných klientov:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Organizácia firemných ciest a team-buildingov</li>
                                <li>Zabezpečenie konferenčných priestorov</li>
                            </ul>
                        </td>
                        <td class="align-middle" style="width: 15%;"><button id="btn11" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 12 -->
                    <tr>
                        <th class="align-middle" scope="row">12</th>
                        <td class="align-middle">VIP služby:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Prémiové lety a ubytovanie</li>
                                <li>Exkluzívne zážitky a služby</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn12" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 13 -->
                    <tr>
                        <th class="align-middle" scope="row">13</th>
                        <td class="align-middle">Kulinarické a kultúrne zážitky:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Rezervácie v reštauráciách</li>
                                <li>Kultúrne podujatia a festivaly</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn13" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                    <!-- Služba 14 -->
                    <tr>
                        <th class="align-middle" scope="row">14</th>
                        <td class="align-middle">Cestovné balíčky pre špecifické skupiny:</td>
                        <!-- Popis služby -->
                        <td class="align-middle">
                            <ul>
                                <li>Rodinné dovolenky</li>
                                <li>Párty dovolenky</li>
                                <li>Senior friendly balíčky</li>
                            </ul>
                        </td>
                        <!-- Tlačidlo pre vybratie služby -->
                        <td class="align-middle" style="width: 15%;"><button id="btn14" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <br><br>
    <?php
        include_once("partials/footer.php");
    ?>
