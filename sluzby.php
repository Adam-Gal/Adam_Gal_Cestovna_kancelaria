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

        <?php
        $sluzby_object = new Sluzby();
        $sluzba = $sluzby_object->select();

            echo '<div class="zoznam">';
            echo '<table class="table caption-top">';
            echo '<caption>List služieb:</caption>';
            echo '<thead class="table-dark"> <tr> <th scope="col">#</th> <th scope="col">Služba</th> <th scope="col">Popis služby</th> <th scope="col">Pridať</th> </tr> </thead>';
            echo '<tbody>';
            for ($i=0; $i < count($sluzba); $i++) {
                echo '<tr>';
                echo '<th class="align-middle" scope="row">'.($i+1).'</th>';
                echo '<td class="align-middle">'.$sluzba[$i]->nazov.'</td>';
                echo '<td class="align-middle"> <ul>';
                if ($sluzba[$i]->popis1 != null) echo '<li>'.$sluzba[$i]->popis1.'</li>';
                if ($sluzba[$i]->popis2 != null) echo '<li>'.$sluzba[$i]->popis2.'</li>';
                if ($sluzba[$i]->popis3 != null) echo '<li>'.$sluzba[$i]->popis3.'</li>';
                echo '</ul> </td>';
                echo '<td class="align-middle" style="width: 15%;"> <button id="btn" class="btn" style="margin: 0 auto; color: white; background-color: grey; font-size: large;">Vybrať</button> </td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            echo '<br><br>';
            include_once("partials/footer.php");
        ?>