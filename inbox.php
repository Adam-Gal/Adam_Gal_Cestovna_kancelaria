<?php
include_once('partials/head.php');
include_once('partials/header.php');
if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']){
    header('Location: 404.php');
}
?> 
    <main>
      <section class="container" style="margin-top: 100px">
        <style> body { background: linear-gradient( rgba(3,124,166,1) 0%, rgba(38,129,208,1) 60%, rgba(0,212,255,1) 100%);} </style>
          <?php
                if($_SESSION['is_admin'] == 1){
                    echo '<div class="col-100 text-center">';
                    echo '<h1 style="margin-top: 30px; padding: 100px; padding-top: 10px; padding-bottom: 10px; background-color: white; border-radius: 10px; display: inline-flex; border-radius: 21% 79% 21% 79% / 100% 0% 100% 0%">Inbox</h1>';
                    echo '<br>';
                    echo '<a href="admin.php" class="btn btn-light text-center" style="margin-top: 15px">Admin rozhranie</a>';
                    echo '</div>';
                }
                else {
                    echo '<div class="col-100 text-center">';
                    echo '<h1 style="margin-top: 30px; padding: 40px; padding-top: 10px; padding-bottom: 10px; background-color: white; border-radius: 10px; display: inline-flex; border-radius: 21% 79% 21% 79% / 100% 0% 100% 0%">Používatelské rozhranie</h1>';
                    echo '</div>';
                }
          ?>
          <div class="row">
            <div class="coll-100">
                <?php
                    if($_SESSION['is_admin'] == 1){
                        $dotazy_object = new Dotazy();
                        $dotaz = $dotazy_object->select();

                        if(isset($_POST['delete_dotaz'])){
                            $dotaz_id = $_POST['delete_dotaz'];
                            $dotazy_object->delete($dotaz_id);
                            header('Location: inbox.php');
                            die();
                        }

                        echo '<h2 style="margin-top: 20px; margin-bottom: 7px; padding: 15px; padding-top: 10px; padding-bottom: 10px; background-color: white; border-radius: 10px; display: inline-block">Dotazy</h2>';
                        echo '<div style="padding: 20px; padding-bottom: 0px; background-color: white; border-radius: 10px">';
                        echo '<table class="table table-striped">';
                        echo '<tr><th scope="col">Meno</th>
                              <th scope="col">Email</th>
                              <th scope="col">Sprava</th>
                              <th scope="col">Delete</th>
                          </tr>';
                        foreach($dotaz as $d){
                            echo '<tr>';
                            echo '<td>'.$d->meno;'</td>';
                            echo '<td>'.$d->email;'</td>';
                            echo '<td>'.$d->text;'</td>';

                            echo '<td>
                                <form action="" method="POST">
                                    <button class="btn btn-danger" type="submit" name="delete_dotaz" value="'.$d->id.'"'.'>Vymaž</button>
                                </form>
                              </td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                        echo '</div>';

                        $spravy_object = new Spravy();
                        $spravy = $spravy_object->select();

                        if(isset($_POST['delete_sprava'])){
                            $sprava_id = $_POST['delete_sprava'];
                            $spravy_object->delete($sprava_id);
                            header('Location: inbox.php');
                            die();
                        }

                        echo '<h2 style="margin-top: 20px; margin-bottom: 7px; padding: 15px; padding-top: 10px; padding-bottom: 10px; background-color: white; border-radius: 10px; display: inline-block">Správy</h2>';
                        echo '<div style="padding: 20px; padding-bottom: 0px; background-color: white; border-radius: 10px">';
                        echo '<table class="table table-striped">';
                        echo '<tr><th scope="col">Email</th>
                              <th scope="col">Nadpis</th>
                              <th scope="col">Sprava</th>
                              <th scope="col">Delete</th>
                          </tr>';
                        foreach($spravy as $s){
                            echo '<tr>';
                            echo '<td>'.$s->email;'</td>';
                            echo '<td>'.$s->nadpis;'</td>';
                            echo '<td>'.$s->text;'</td>';

                            echo '<td>
                                <form action="" method="POST">
                                    <button class="btn btn-danger" type="submit" name="delete_sprava" value="'.$s->id.'"'.'>Vymaž</button>
                                </form>
                              </td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                        echo '</div>';
                    }
                    else {
                        $spravy_object = new Spravy();
                        $spravy = $spravy_object->select();

                        if(isset($_POST['delete_sprava'])){
                            $sprava_id = $_POST['delete_sprava'];
                            $spravy_object->delete($sprava_id);
                            header('Location: inbox.php');
                            die();
                        }

                        echo '<h2 style="margin-top: 20px; margin-bottom: 7px; padding: 15px; padding-top: 10px; padding-bottom: 10px; background-color: white; border-radius: 10px; display: inline-block">Správy</h2>';
                        echo '<div style="padding: 20px; padding-bottom: 0px; background-color: white; border-radius: 10px">';
                        echo '<table class="table table-striped">';
                        echo '<tr><th scope="col">Email</th>
                              <th scope="col">Nadpis</th>
                              <th scope="col">Sprava</th>
                              <th scope="col">Delete</th>
                          </tr>';
                        foreach($spravy as $s){
                            echo '<tr>';
                            echo '<td>'.$s->email;'</td>';
                            echo '<td>'.$s->nadpis;'</td>';
                            echo '<td>'.$s->text;'</td>';

                            echo '<td>
                                <form action="" method="POST">
                                    <button class="btn btn-danger" type="submit" name="delete_sprava" value="'.$s->id.'"'.'>Vymaž</button>
                                </form>
                              </td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                        echo '</div>';
                    }
                ?>
                <a href="logout.php" class="btn btn-danger text-center" style="display: grid; margin-top: 25px">Odhlásiť</a>
            </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 