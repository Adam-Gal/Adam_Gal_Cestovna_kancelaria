<!-- Päta stránky -->
            <footer>
                <div class="container">
                    <footer class="py-3 my-4">
                        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                            <!-- Odkaz na domov -->
                            <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Domov</a></li>
                            <!-- Odkaz na destinácie -->
                            <li class="nav-item"><a href="Destinacie.php" class="nav-link px-2 text-body-secondary">Destinácie</a></li>
                            <!-- Odkaz na služby -->
                            <li class="nav-item"><a href="Sluzby.php" class="nav-link px-2 text-body-secondary">Služby</a></li>
                            <!-- Odkaz na kontakt -->
                            <li class="nav-item"><a href="Kontakt.php" class="nav-link px-2 text-body-secondary">Kontakt</a></li>
                        </ul>
                        <!-- Informácie o copyrighte -->
                        <p class="text-center text-body-secondary">© 2023 Vias s.r.o</p>
                        <!-- Informácie o vypracovaní -->
                        <p class="text-center text-body-secondary" style="font-weight: bold;">Vypracoval Adam Gál</p>
                    </footer>
                </div>
            </footer>
            <?php
                require_once('_inc/functions.php');
                add_scripts();
            ?>
        </div>
    </body>

</html>