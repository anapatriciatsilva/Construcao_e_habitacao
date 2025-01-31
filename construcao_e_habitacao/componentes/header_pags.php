<?php

$empreendimentos = getEmpreendimentos();
$contactos = getContactos();
$pagina_atual = $menu_atual; 
$banner = getBannerPagina($pagina_atual);

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $menu_atual ?></title>
    
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="fonts/fonts.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- SCRIPT -->
        <script src="js/main.js" defer></script>

    </head>

    <body onload="scrollAutomatico('<?= $menu_atual ?>')">
        <!--Parte Superior-->
        <header class="container-fluid px-0">
            <!--Navbar Desktop-->
            <div class="row">
                <div class="col-12 nav-father">
                    <nav class="navbar navbar-expand-lg d-none d-lg-block">
                        <div class="container-fluid">

                            <a class="navbar-brand logo" href="index.php"></a>

                            <div class="collapse navbar-collapse navbar-desktop">

                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link menus <?= ($menu_atual == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menus <?= ($menu_atual == "quem_somos") ? "active" : ""; ?>" href="quem_somos.php">Quem Somos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menus <?= ($menu_atual == "socios") ? "active" : ""; ?>" href="socios.php">Sócios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menus <?= ($menu_atual == "noticias") ? "active" : ""; ?>" href="noticias.php">Notícias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menus <?= ($menu_atual == "destaques" || $menu_atual == "destaque_especifico") ? "active" : ""; ?>" href="destaques.php">Destaques</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link menus <?= ($menu_atual == "empreendimentos") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false" id="link_empreendimentos">
                                            Empreendimentos
                                        </a>
                                        <ul class="dropdown-menu">

                                            <?php foreach($empreendimentos as $e): ?>
                                            
                                                <li><a class="dropdown-item submenus" href="empreendimentos.php?id=<?= $e["id"]; ?>"><?= $e["titulo"]; ?></a><hr></li>

                                            <?php endforeach; ?>
                                             
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menus <?= ($menu_atual == "centro_ferias") ? "active" : ""; ?>" href="centro_ferias.php">Centro de Férias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menus <?= ($menu_atual == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <!--Navbar Mobile-->
            <div class="row">
                <div class="col-12 nav-father">
                    <nav class="navbar navbar-expand-lg d-block d-lg-none">
                        <div class="container-fluid px-0 menu-mobile">

                            <a class="navbar-brand logo" href="index.html"></a>
                            <button class="navbar-toggler mx-2 borda" id="icone-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            
                            <img src="imagens/buttons_icons/closeMenu.svg" id="icone-fechar" class="mx-2 borda" alt="Fechar Menu">
        
                            <div class="collapse navbar-collapse navbar-mobile" id="navbarNav">
        
                            <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link menus-mobile <?= ($menu_atual == "home") ? "active" : ""; ?>" href="index.php">Home</a>
                                    </li> <hr>
                                    <li class="nav-item">
                                        <a class="nav-link menus-mobile <?= ($menu_atual == "quem_somos") ? "active" : ""; ?>" href="quem_somos.php">Quem Somos</a>
                                    </li> <hr>
                                    <li class="nav-item">
                                        <a class="nav-link menus-mobile <?= ($menu_atual == "socios") ? "active" : ""; ?>" href="socios.php">Sócios</a>
                                    </li> <hr>
                                    <li class="nav-item">
                                        <a class="nav-link menus-mobile <?= ($menu_atual == "noticias") ? "active" : ""; ?>" href="noticias.php">Notícias</a>
                                    </li> <hr>
                                    <li class="nav-item">
                                        <a class="nav-link menus-mobile <?= ($menu_atual == "destaques" || $menu_atual == "destaque_especifico") ? "active" : ""; ?>" href="destaques.php">Destaques</a>
                                    </li> <hr>
                                    <li class="nav-item dropdown" id="dropdown-mobile">
                                        <a class="nav-link menus-mobile <?= ($menu_atual == "empreendimentos") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                            Empreendimentos
                                        </a>
                                        <ul class="dropdown-menu mobile">
                                            <?php foreach($empreendimentos as $e): ?>
                                                
                                                <li><a class="dropdown-item submenus" href="empreendimentos.php?id=<?= $e["id"]; ?>"><?= $e["titulo"]; ?></a><hr></li>

                                            <?php endforeach; ?>
                                        </ul>
                                    </li> <hr>
                                    <li class="nav-item">
                                        <a class="nav-link menus-mobile <?= ($menu_atual == "centro_ferias") ? "active" : ""; ?>" href="centro_ferias.php">Centro de Férias</a>
                                    </li> <hr>
                                    <li class="nav-item">
                                        <a class="nav-link menus-mobile <?= ($menu_atual == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- Imagem Topo Desktop-->
            <div class="row">
                <div class="col d-none d-sm-block">
                    <img class="imagem-topo" id="imagem-topo-desktop" src="<?php echo $banner['imagem']; ?>">
                </div>
            </div>

            <!-- Imagem Topo Mobile-->
            <div class="row">
                <div class="col d-block d-sm-none">
                    <img class="imagem-topo" id="imagem-topo-mobile" src="<?php echo $banner['imagem_mobile']; ?>">
                </div>
            </div>
            
           
</header>

