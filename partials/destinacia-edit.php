<main>
    <section class="container">
        <style> body { background: rgba(38,129,208,1)} </style>
        <div class="row" style="margin-top: 150px">
            <div class="col-100" style="padding: 20px; padding-bottom: 0px; background-color: white; border-radius: 10px">
                <form action="" method="POST">
                    <label for="destinacia" style="font-weight: bolder">Destinácia:</label>
                    <br>
                    <input class="text-center" type="text" name="destinacia" value="<?php echo $destinacia ?>" style="width: 100%; height: 35px; border-radius: 10px; border-style: solid; border-color: darkgray; border-width: 1px">
                    <br>
                    <label for="fotka" style="font-weight: bolder">Fotka</label>
                    <br>
                    <input class="text-center" type="text" name="fotka" value="<?php echo $fotka ?>" style="width: 100%; height: 35px; border-radius: 10px; border-style: solid; border-color: darkgray; border-width: 1px">
                    <br>
                    <label for="cena1" style="font-weight: bolder">Cena 1:</label>
                    <br>
                    <input class="text-center" name="cena1" value="<?php echo $cena1 ?>" style="width: 100%; height: 35px; border-radius: 10px; border-style: solid; border-color: darkgray; border-width: 1px">
                    <label for="cena1" style="font-weight: bolder">Cena 2:</label>
                    <br>
                    <input class="text-center" name="cena2" value="<?php echo $cena2 ?>" style="width: 100%; height: 35px; border-radius: 10px; border-style: solid; border-color: darkgray; border-width: 1px">
                    <label for="cena1" style="font-weight: bolder">Cena 3:</label>
                    <br>
                    <input class="text-center" name="cena3" value="<?php echo $cena3 ?>" style="width: 100%; height: 35px; border-radius: 10px; border-style: solid; border-color: darkgray; border-width: 1px">
                    <label for="cena1" style="font-weight: bolder">Cena 4:</label>
                    <br>
                    <input class="text-center" name="cena4" value="<?php echo $cena4 ?>" style="width: 100%; height: 35px; border-radius: 10px; border-style: solid; border-color: darkgray; border-width: 1px">
                    <label for="cena1" style="font-weight: bolder">Cena 5:</label>
                    <br>
                    <input class="text-center" name="cena5" value="<?php echo $cena5 ?>" style="width: 100%; height: 35px; border-radius: 10px; border-style: solid; border-color: darkgray; border-width: 1px">
                    <br>
                    <button class="btn btn-secondary" type="submit" name="edit_destinacia_id" value="<?php echo $edit_destinacia_id ?>" style="position: relative; left: 50%; transform: translate(-50%, -50%); margin-top: 30px; ">Uložiť zmeny</button>
                </form>
            </div>
        </div>
    </section>
</main>
