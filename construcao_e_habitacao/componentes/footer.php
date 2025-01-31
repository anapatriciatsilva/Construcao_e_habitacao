<?php

$contactos = getContactos();

?>

        <!--Parte Inferior-->
        <footer class="container-fluid px-0">
            <!--Contactos-->
            <div class="row">
                <div class="col contactos mx-auto">
                    
                    <div class="conteudo-contactos">
                        <div class="linha-branca"></div>
                        <h1 class="titulo-contactos">Contactos</h1>

                        <div class="icones-contactos">
                            <div class="col telefone">
                                <img src="imagens/buttons_icons/telefone.svg" alt="telefone">
                                <p><?= $contactos["telefone"]; ?></p>
                            </div>
                            <div class="col morada">
                                <img src="imagens/buttons_icons/localizacao.svg" alt="morada">
                                <p><?= $contactos["morada"]; ?></p>
                            </div>
                            <div class="col email">
                                <img src="imagens/buttons_icons/email.svg" alt="email">
                                <p class="mx-auto"><?= $contactos["email"]; ?></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--Mapa Localizaçao-->
            <div class="row">
                <div class="col-12 localizacao mx-auto">
                    <div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%;height:513px;"><div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=cooperativa+de+contrução+e+hbitação+santo+antónio&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="code-for-google-map" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="make-map-infor-mation">premium bootstrap themes</a><style>#canvas-for-googlemap .text-marker.map-generator{max-width: 100%; max-height: 100%; background: none;}</style></div>
                </div>
            </div>

             <!--Rodape-->
            <div class="row">
                <div class="col rodape mx-auto">
                    <div class="conteudo-rodape">
                        <div class="facebook">
                            <img src="imagens/buttons_icons/facebook.svg" alt="facebook" id="icone-facebook">
                            <br>
                            <a href="<?= $contactos["link_facebook"]; ?>" class=" link-facebook" target="_blank">Siga-nos no Facebook</a>
                        </div>
                        <div class="linha-horizontal"></div>

                        <div class="col-8 mx-auto">
                            <!--Barra navegacao - rodape-->
                            <div class="col nav-footer float-end d-none d-lg-block">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="container-fluid">
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                            <ul class="navbar-nav ml-auto nav-items"> 
                                                <li class="nav-item">
                                                    <a class="nav-link <?= ($menu_atual == "home") ? "active" : ""; ?>" href="index.php">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link <?= ($menu_atual == "quem_somos") ? "active" : ""; ?>" href="quem_somos.php">Quem Somos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link <?= ($menu_atual == "socios") ? "active" : ""; ?>" href="socios.php">Sócios</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link <?= ($menu_atual == "noticias") ? "active" : ""; ?>" href="noticias.php">Notícias</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link <?= ($menu_atual == "destaques" || $menu_atual == "destaque_especifico") ? "active" : ""; ?>" href="destaques.php">Destaques</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link <?= ($menu_atual == "empreendimentos") ? "active" : ""; ?>" href="#" onclick="abrirEmpreendimentos()">Empreendimentos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link <?= ($menu_atual == "centro_ferias") ? "active" : ""; ?>" href="centro_ferias.php">Centro de Férias</a>
                                                </li>
                                                <li class="nav-item <?= ($menu_atual == "contactos") ? "active" : ""; ?>">
                                                    <a class="nav-link" href="contactos.php">Contactos</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <!--Copyright-->
                            <div class="col mx-auto float-start copyright">
                                <a href="https://portfolioanapatriciasilva.site/portfolio/">
                                    Copyright 2024 © Ana Patricia Silva. Todos os direitos reservados.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </body>
</html>