<?php
include_once('partials/head.php');
include_once('partials/header.php');
if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] || !$_SESSION['is_admin']){
    header('Location: 404.php');
}
?> 
    <main>
      <section class="container" style="margin-top: 100px">
        <style> body { background: linear-gradient( rgba(3,124,166,1) 0%, rgba(38,129,208,1) 60%, rgba(0,212,255,1) 100%);} </style>
          <div class="col-100 text-center">
              <h1 style="margin-top: 30px; padding: 40px; padding-top: 10px; padding-bottom: 10px; background-color: white; border-radius: 10px; display: inline-flex; border-radius: 21% 79% 21% 79% / 100% 0% 100% 0%">Admin rozhranie</h1>
              <br>
              <a href="inbox.php" class="btn btn-light text-center" style="margin-top: 15px">Inbox</a>
          </div>
          <div class="row">
            <div class="col-100">
                <?php
                    //Kontakty

                    echo '<h2 style="margin-top: 20px; margin-bottom: 7px; padding: 15px; padding-top: 10px; padding-bottom: 10px; background-color: white; border-radius: 10px; display: inline-block">Kontakty</h2>';
                    echo '<div style="padding: 20px; padding-bottom: 0px; background-color: white; border-radius: 10px">';

                    $contact_object = new Kontakty();
                    $contacts = $contact_object->select_kontakty();

                    if(isset($_POST['delete_contact'])){
                        $contact_id = $_POST['delete_contact'];
                        $contact_object->delete($contact_id);
                        header('Location: admin.php');
                        die();
                    }

                    $destinacia_object = new Destinacie();
                    $destinacia = $destinacia_object->select();

                    if(isset($_POST['delete_destinacia'])){
                        $destinacia_id = $_POST['delete_destinacia'];
                        $destinacia_object->delete($destinacia_id);
                        header('Location: admin.php');
                        die();
                    }

                    echo '<table class="table table-striped">';
                    echo '<tr><th scope="col">Meno</th>
                              <th scope="col">Email</th>
                              <th scope="col">Tel.č</th>
                              <th scope="col">Delete</th>
                              <th scope="col">Edit</th>
                          </tr>';
                    foreach($contacts as $c){
                        echo '<tr>';
                        echo '<td>'.$c->adresat;'</td>';
                        echo '<td>'.$c->email;'</td>';
                        echo '<td>'.$c->tel_c;'</td>';

                        echo '<td>
                                <form action="" method="POST">
                                    <button class="btn btn-danger" type="submit" name="delete_contact" value="'.$c->id.'"'.'>Vymaž</button>
                                </form>
                              </td>';
                        echo '<td>
                                <form action="info-update.php" method="POST">
                                    <button class="btn btn-success" type="submit" name="edit_contact" value="'.$c->id.'"'.'>Editovať</button>
                                </form>
                              </td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                    echo '<form action="info-add.php" method="POST">';
                    echo '<button name="add_contact" style="position: relative; left: 50%; transform: translate(-50%, -50%); margin-top: 20px;" class="btn btn-secondary" type="submit">Pridať</button>';
                    echo '</form>';
                    echo '</div>';

                //Destinácie

                echo '<h2 style="margin-top: 20px; margin-bottom: 7px; padding: 15px; padding-top: 10px; padding-bottom: 10px; background-color: white; border-radius: 10px; display: inline-block">Destinácie</h2>';
                echo '<div style="padding: 20px; padding-bottom: 0px; background-color: white; border-radius: 10px">';


                echo '<table class="table table-striped">';
                echo '<tr><th scope="col">Destinacia</th>
                              <th scope="col">Fotka</th>
                              <th scope="col">Cena 1</th>
                              <th scope="col">Cena 2</th>
                              <th scope="col">Cena 3</th>
                              <th scope="col">Cena 4</th>
                              <th scope="col">Cena 5</th>
                              <th scope="col">Delete</th>
                              <th scope="col">Edit</th>
                          </tr>';
                foreach($destinacia as $d){
                    echo '<tr>';
                    echo '<td>'.$d->destinacia;'</td>';
                    echo '<td>'.$d->fotka;'</td>';
                    echo '<td>'.$d->cena1;'</td>';
                    echo '<td>'.$d->cena2;'</td>';
                    echo '<td>'.$d->cena3;'</td>';
                    echo '<td>'.$d->cena4;'</td>';
                    echo '<td>'.$d->cena5;'</td>';

                    echo '<td>
                                <form action="" method="POST">
                                    <button class="btn btn-danger" type="submit" name="delete_destinacia" value="'.$d->id.'"'.'>Vymaž</button>
                                </form>
                              </td>';
                    echo '<td>
                                <form action="info-update.php" method="POST">
                                    <button class="btn btn-success" type="submit" name="edit_destinacia" value="'.$d->id.'"'.'>Editovať</button>
                                </form>
                              </td>';
                    echo '</tr>';
                }
                echo '</table>';
                echo '<form action="info-add.php" method="POST">';
                echo '<button name="add_destinacia" style="position: relative; left: 50%; transform: translate(-50%, -50%); margin-top: 20px;" class="btn btn-secondary" type="submit">Pridať</button>';
                echo '</form>';
                echo '</div>';
                ?>
                <a href="logout.php" class="btn btn-danger text-center" style="display: grid; margin-top: 25px">Odhlásiť</a>
            </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 