<?php

$quem_somos = getQuemSomos();

?>

<!--Parte do Meio-->
<main class="container main-quem-somos">
            <!-- Quem Somos -->
            <div class="row">
                <div class="col-12 conteudo conteudo-main mx-auto">
                    <div class="linha linha-superior"></div>
                    <h1 class="col text-center">
                        <?= $quem_somos["titulo"]; ?>
                    </h1>
                    <!--Quem Somos Desktop-->
                    <div class="col d-none d-sm-block area-texto"> 
                        <img src="<?= $quem_somos["imagem"]; ?>" class="col-4 float-start img-quem-somos">
                        <div class="col texto-paginas-desktop">
                            <?= $quem_somos["texto"]; ?>
                        </div>
                    </div>

                    <!--Quem Somos Mobile-->
                    <div class="col d-block d-sm-none area-texto"> 
                        <div class="col d-flex justify-content-center">
                            <img src="<?= $quem_somos["imagem"]; ?>" alt="imagem_quem_somos" class="img-quem-somos">
                        </div>
                        <div class="col texto-paginas-mobile">
                            <?= $quem_somos["texto"]; ?>
                        </div>
                    </div>
                </div>
            </div>

        </main>