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
        <img src="img/img1.jpg" style="z-index: -1;" alt="úvodný obrázok" class="pozadie bg-image" loading="eager">
        <br><br><br><br><br><br><br>

        <!-- Úvodný text -->
        <div class="text-center uvodny_text">
            <h1 id="nadpis">Cestovná kancelária Vias</h1>
        </div>
        <br><br><br>

        <!-- Sekcia destinácií pre malé obrazovky -->
        <div class="obrazky d-flex flex-column justify-content-center d-md-none">
            <!-- Destinácia Bali -->
            <div class="obrazok">
                <img src="img/img2.jpg" alt="Bali" style="border-radius: 20px;" class="img-thumbnail mb-2">
                <h1 class="ponuka">Bali</h1>
                <br>
                <p class="text_uputavka">Kultúrne poklady a harmonická atmosféra vytvárajú ideálnu dovolenkovú oázu. Bali je miestom, kde sa stretáva prírodná krása s kultúrnym bohatstvom, ponúkajúc nezabudnuteľné zážitky pre váš oddych a zážitky.</p>
                <br>
                <div class="obj">
                    <a href="Destinacie.php" class="objednaj">Objednaj TU !!!</a>
                </div>
            </div>
            <!-- Destinácia Egypt -->
            <br><br>
            <div class="obrazok">
                <img src="img/img3.jpg" alt="Egypt" style="border-radius: 20px;" class="img-thumbnail mb-2">
                <h1 class="ponuka">Egypt</h1>
                <br>
                <p class="text_uputavka">Piesočné pláže pri tyrkysovo modrom mori vytvárajú dokonalý ráj pre oddych. Egypt je miestom, kde sa stretáva moderný luxus s historickým pokladom, ponúkajúc nezabudnuteľné zážitky a relaxáciu v jednom.</p>
                <br>
                <div class="obj">
                    <a href="Destinacie.php" class="objednaj">Objednaj TU !!!</a>
                </div>
            </div>
            <!-- Destinácia Kanárske ostrovy -->
            <div class="obrazok">
                <img src="img/img4.jpg" alt="Kanárske ostrovy" style="border-radius: 20px;" class="img-thumbnail mb-2">
                <h1 class="ponuka">Kanárske ostrovy</h1>
                <br>
                <p class="text_uputavka">Oáza pod slnkom a modrým nebom Atlantiku. Zlatisté pláže, ktoré omýva príjemné teplo oceánu, tvoria dokonalé miesto na oddych. Kanárske ostrovy sú miestom, vytvárajúc ideálny raj pre oddych a objavovanie.</p>
                <br>
                <div class="obj">
                    <a href="Destinacie.php" class="objednaj">Objednaj TU !!!</a>
                </div>
            </div>
        </div>   
        <!-- Sekcia destinácií pre širšie obrazovky -->
        <div class="container obrazky text-center d-none d-md-flex justify-content-center"
            style="max-width: 80%; font-size: 1.5cap;">
            <!-- Destinácia Bali -->
            <div class="obrazok mx-4">
                <img src="img/img2.jpg" alt="Bali" style="border-radius: 20px;" class="img-thumbnail img-sm">
                <h1 class="ponuka">Bali</h1>
                <p class="text_uputavka">Zlatisté pláže, kultúrne poklady a harmonická atmosféra vytvárajú ideálnu dovolenkovú oázu. Bali je miestom, kde sa stretáva prírodná krása s kultúrnym bohatstvom, ponúkajúc nezabudnuteľné zážitky pre váš oddych a zážitky.</p>
                <br>
                <div class="obj">
                    <a href="Destinacie.php" class="objednaj">Objednaj TU !!!</a>
                </div>
            </div>
            <!-- Destinácia Egypt -->
            <div class="obrazok mx-4">
                <img src="img/img3.jpg" alt="Egypt" style="border-radius: 20px;" class="img-thumbnail img-sm">
                <h1 class="ponuka">Egypt</h1>
                <p class="text_uputavka">Piesočné pláže pri tyrkysovo modrom mori vytvárajú dokonalý ráj pre oddych. Egypt je miestom, kde sa stretáva moderný luxus s historickým pokladom, ponúkajúc nezabudnuteľné zážitky a relaxáciu v jednom.</p>
                <br>
                <div class="obj">
                    <a href="Destinacie.php" class="objednaj">Objednaj TU !!!</a>
                </div>
            </div>
            <!-- Destinácia Kanárske ostrovy -->
            <div class="obrazok mx-4">
                <img src="img/img4.jpg" alt="Kanárske ostrovy" style="border-radius: 20px;" class="img-thumbnail img-sm">
                <h1 class="ponuka">Kanárske ostrovy</h1>
                <p class="text_uputavka">Oáza pod slnkom a modrým nebom Atlantiku. Zlatisté pláže, ktoré omýva príjemné teplo oceánu, tvoria dokonalé miesto na oddych. Kanárske ostrovy sú miestom, vytvárajúc ideálny raj pre oddych a objavovanie.</p>
                <br>
                <div class="obj">
                    <a href="Destinacie.php" class="objednaj">Objednaj TU !!!</a>
                </div>
            </div>
        </div>

        <br><br><br><br>

        <!-- Sekcia noviniek -->
        <div>
            <h1 id="novinky">Novinky:</h1>
        </div>

        <!-- Článok 1 -->
        <div class="clanok">
            <div>
                <img src="img/img5.jpg" style="border-radius: 5px;" class="img-thumbnail img-fluid" alt="Článok 1">
            </div>
            <div class="sprava">
                <h2>Otvárame Krídla ku Slnečnému Ostrovu: Nová Destinácia Cyprus!</h2>
                <p>S ďalším letom naša cestovná spoločnosť prináša vzrušujúce správy - Cyprus, ostrov kontrastov a krásy, sa stáva našou najnovšou destináciou! Otvárame novú trasu, ktorá spája cestujúcich so slnečným pobrežím a pútavou históriou tejto jedinečnej krajiny. Zarezervujte si svoje letenky a pripravte sa na dobrodružstvo na Slnečnom Ostrove! Letisko na Cyprus je teraz otvorené pre vás, aby ste objavili kúzlo tohto jedinečného miesta. Nechajte sa unášať krásou a pohostinnosťou Cyprusu s našou cestovnou spoločnosťou!</p>
            </div>
        </div>

        <!-- Článok 2 -->
        <div class="clanok">
            <div>
                <img src="img/img6.jpg" style="border-radius: 5px;" class="img-thumbnail img-fluid" alt="Článok 2">
            </div>
            <div class="sprava">
                <h2>Malorka: Ostrov Slnečných Lúčov a Kultúrnych Pokladov</h2>
                <p>V srdci Stredozemného mora sa rozprestiera Malorka, jedinečný ostrov plný krásnych scenérií, vôní citrusových sadov a pútavého kultúrneho dedičstva. Dnes sa pozrieme na čaro tohto ostrova, ktorý prilákal pozornosť cestovateľov svojou nezameniteľnou atmosférou a bohatou ponukou zážitkov. Malorka je miesto, kde sa nudit rozhodne nebudete. Pláže ponúkajú nielen oddych, ale aj rôzne vodné športy. Cyklistika, golfovanie a výlety na lodi sú len niektoré z možností pre športových nadšencov. Pre milovníkov nočného života sú tu moderné kluby a tradičné taverny, kde sa môžete pohrávať s taktmi flamenka.</p>
            </div>
        </div>

        <!-- Článok 3 -->
        <div class="clanok">
            <div>
                <img src="img/img7.jpg" style="border-radius: 5px;" class="img-thumbnail img-fluid" alt="Článok 3">
            </div>
            <div class="sprava">
                <h2>Cestovanie mimo Tradičných Turistických Destinácií</h2>
                <p>Cestovanie je ako fascinujúci príbeh, ktorý sa odvíja na stránkach sveta. Často sa však stáva, že sa zameriavame iba na veľké metropoly a populárne turistické destinácie, pričom prehliadame malé mestečká, ktoré ukrývajú svoje vlastné tajomstvá a pôvab. Ak túžite po nezabudnuteľnom dobrodružstve, oddialte sa od hlučných davov a objavte krásy sveta v tých najmenších zákutiach.Cestovanie do malých mestečiek neznamená nutne obetovať pohodlie. Mnohé z týchto destinácií poskytujú útulné penzióny a malebné hotely, ktoré sú pripravené privítať cestovateľov so všetkým pohodlím a pohostinnosťou.</p>
            </div>
        </div>

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

