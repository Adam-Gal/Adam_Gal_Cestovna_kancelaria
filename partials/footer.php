<!-- Päta stránky -->
            <footer>
                <div class="container">
                    <footer class="py-3 my-4">
                        <?php
                            $menu_object = new Menu();
                            $podstranky = $menu_object->select();
                            echo '<ul class="nav justify-content-center border-bottom pb-3 mb-3">';
                            for ($i = 0; $i < count($podstranky); $i++)
                            {
                                echo '<li class="nav-item"><a href="'.$podstranky[$i]->link.'" class="nav-link px-2 text-body-secondary">'.$podstranky[$i]->nazov.'</a></li>';
                            }
                            echo '</ul>';
                        ?>
                        <!-- Informácie o copyrighte -->
                        <p class="text-center text-body-secondary">© 2024 Vias s.r.o</p>
                        <!-- Informácie o vypracovaní -->
                        <p class="text-center text-body-secondary" style="font-weight: bold;">Vypracoval Adam Gál</p>
                    </footer>
                </div>
            </footer>
            <?php
                //add_scripts();
                $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
                $page_object = new Stranka($page_name);
                $page_object->add_scripts();
            ?>
        </div>
    </body>

</html>