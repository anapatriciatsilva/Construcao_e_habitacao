<?php

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $empreendimento_especifico = getEmpreendimentoEspecifico($id);
}

?>

    <?php if(!empty($empreendimento_especifico)): ?>

        <!--Parte do Meio-->
        <main class="container main-empreendimentos">
            <!-- Área Empreendimentos -->
            <div class="row">
                <div class="col-12 conteudo conteudo-main mx-auto">
                    <div class="linha linha-superior"></div>
                    <h1 class="col text-center">
                        Empreendimentos
                    </h1>
                    <h4 class="col text-center">
                        <?= $empreendimento_especifico["titulo"]; ?>
                    </h4>
                    <div class="col area-texto texto-paginas-mobile" id="texto-empreendimentos"> 
                        <?= $empreendimento_especifico["texto"]; ?>
                    </div>

                    <!--Imagens Empreedimentos-->
                    <div class="col-12 area-imagens">

                        <div class="row">
                            <?php for($i=1; $i<=4; $i++): ?>

                                <?php if(!empty($empreendimento_especifico["imagem_$i"])): ?>

                                    <div class="col-xl-6 col-md-12 pai-empreendimentos">
                                        <img class="imagens-empreendimentos" src="<?= $empreendimento_especifico["imagem_$i"] ?>" alt="<?= $empreendimento_especifico["imagem_$i"] ?>" >
                                    </div>

                                <?php endif; ?>

                            <?php endfor; ?>
                        </div>

                    </div>
                    
                </div>
            </div>
        </main>
    
    <?php else: ?>

        <main class="container my-5">

            <div class="row">
                <div class="col-12 text-center">
                <h1>Empreendimento não encontrado</h1>
                </div>
            </div>

        </main>

    <?php endif; ?>
