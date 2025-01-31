<?php

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $destaque_especifico = getDestaqueEspecifico($id);
}

?>

    <?php if(!empty($destaque_especifico)): ?>

        <!--Parte do Meio-->
        <main class="container main-destaque-especifico">
           <!-- Área Destaque Específico -->
            <div class="row">
                <div class="col-12 conteudo conteudo-main mx-auto">
                    <div class="linha linha-superior"></div>
                    <h1 class="col text-center">
                        Destaques
                    </h1>
                    <h4 class="col text-center">
                        <?= $destaque_especifico["titulo"]; ?>
                    </h4>
                    <div class="col area-texto texto-paginas-mobile" id="texto-destaque-especifico"> 
                        <?= $destaque_especifico["texto"]; ?>
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="botao-voltar-destaque">
                            <img src="imagens/buttons_icons/voltarDestaques.svg" alt="Voltar-destaque" id="imagem-original">
                            <img src="imagens/buttons_icons/voltarDestaquesHover.svg" alt="Voltar-destaque-hover" class="imagem-botao" id="imagem-hover">
                            <a href="destaques.php" class="link-botao" id="voltar-para-destaque">Voltar para destaques</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
    
    <?php else: ?>

        <main class="container my-5">

            <div class="row">
                <div class="col-12 text-center">
                <h1>Destaque não encontrado</h1>
                </div>
            </div>
        

        </main>

    <?php endif; ?>
