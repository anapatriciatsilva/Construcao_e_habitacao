<?php

$centro_ferias = getCentroFerias();

?>


<!--Parte do Meio-->
<main class="container main-ferias">
    <!-- Área Centro Ferias -->
    <div class="row">
        <div class="col-12 conteudo conteudo-main mx-auto">
            <div class="linha linha-superior"></div>
            <h1 class="col text-center">
                <?= $centro_ferias["titulo"]; ?>
            </h1>

            <!--Ferias Desktop-->
            <div class="col d-none d-sm-block area-texto" id="texto-ferias"> 
                <img src="<?= $centro_ferias["imagem_1"]; ?>" alt="<?= $centro_ferias["imagem_1"] ?>" class="col-4 float-start img-quem-somos">
                <div class="col texto-paginas-desktop">
                    <?= $centro_ferias["texto"]; ?>
                </div>
            </div>

            <!--Ferias Mobile-->
            <div class="col d-block d-sm-none area-texto" id="texto-ferias"> 
                <div class="col d-flex justify-content-center">
                    <img src="<?= $centro_ferias["imagem_1"]; ?>" alt="<?= $centro_ferias["imagem_1"] ?>" class="col-4 float-start img-quem-somos">
                    </div>
                <div class="col texto-paginas-mobile">
                    <?= $centro_ferias["texto"]; ?>
                </div>
            </div>

            <!--Imagens Férias-->
            <div class="col-12 area-imagens">

                <div class="row">
                    <?php for($i=2; $i<=5; $i++): ?>
                        <div class="col-xl-6 col-md-12 pai-empreendimentos">
                            <img src=" <?= $centro_ferias["imagem_$i"] ?>" alt="<?= $centro_ferias["imagem_$i"] ?>" class="imagens-empreendimentos">
                        </div> 
                    <?php endfor; ?>
                </div>                   
                        
            </div>

        </div>
    </div>
</main>

 