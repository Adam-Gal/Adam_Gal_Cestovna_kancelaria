<!-- Hlavička -->
<header class="bg-dark container-fluid text-center fixed-top">
    <div class="logo-container">
        <!-- Logo obrázok -->
        <img src="img/logo.png" alt="Logo" style="height: 70px; width: auto;">
        <div class="container">
            <!-- Navigačný panel -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <!-- Tlačidlo pre skrytie a rozvinutie menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                    style="margin-bottom: 2%;">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    $menu_object = new Menu();
                    $podstranky = $menu_object->select();
                    echo '<div class="collapse navbar-collapse justify-content-center" id="navbarNav">';
                    echo '<ul class="navbar-nav">';
                    for ($i = 0; $i < count($podstranky); $i++)
                    {
                        echo '<li class="nav-item mx-2"> <a class="nav-link" style="color: rgb(226, 226, 226); font-size: 30px;" href="'.$podstranky[$i]->link.'">'.$podstranky[$i]->nazov.'</a> </li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                ?>
            </nav>
        </div>
    </div>
</header>