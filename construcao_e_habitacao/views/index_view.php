<?php

$elementos_por_pagina = 6;

$destaques_home = getDestaquesDaHome();
$quem_somos_home = getQuemSomos();

?>

        <!--Parte do Meio-->
        <main class="container main-home">
            <!-- Bem-vindo -->
            <div class="row">
                <div class="col conteudo" id="bem-vindo">
                    <div class="linha" id="linha-superior-home"></div>
                    <h1 class="col-12 mx-auto text-center">
                        Bem-vindo à <br>
                        Cooperativa de Construção e Habitação Tripeira
                    </h1>
                    <div class="col-12 mx-auto area-texto" id="texto-home"> 

                        <p><?= substr($quem_somos_home["texto"], 0, 600); ?>...</p>
                        
                    </div>
                    <div class="botao-ver-mais">
                        <img src="imagens/buttons_icons/vermais.svg" alt="Ver-mais-1" class="imagem-botao" id="imagem-original">
                        <img src="imagens/buttons_icons/vermaisHover.svg" alt="Ver-mais-hover" class="imagem-botao" id="imagem-hover">
                        <a href="quem_somos.php" class="link-botao">Ver mais</a>
                    </div>
                </div>
            </div>

            <!-- Destaques-->
            <div class="row">
                <div class="col destaques">
                    <div class="linha" id="linha-inferior"></div>
                    <h1 class="text-center mx-auto">Destaques</h1>

                    <div class="row mx-auto area-destaques">

                        <?php foreach($destaques_home as $d): ?>

                            <div class="col-xl-3 col-md-6 col-sm-12 card card-destaque-home">
                                <img src="<?= $d["imagem"]; ?>" class="card-img-home" alt="<?= $d["titulo"]; ?>">
                                <div class="card-body card-home">
                                    <h5 class="card-title"><?= $d["titulo"]; ?></h5>
                                    <p class="card-text"><?= substr($d["texto"], 0, 80); ?>...</p>
                                    <div class="botao-ver-mais" id="botao-ver-mais-2">
                                        <img src="imagens/buttons_icons/vermais.svg" alt="Ver-mais-2" class="imagem-botao" id="imagem-original-2">
                                        <img src="imagens/buttons_icons/vermaisHover.svg" alt="Ver-mais-hover-2" class="imagem-botao" id="imagem-hover-2">
                                        <a href="destaque_especifico.php?id=<?= $d["id"]; ?>" class="link-botao" id ="ver-mais-2">Ver mais</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </main>
