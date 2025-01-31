<?php 

$total_paginas = getTotalPaginas();
$pagina = 1;

$form = isset($_GET["pagina"]);
if($form){
    $pagina = intval($_GET["pagina"]);
    if($pagina < 1){$pagina = 1;}
    elseif($pagina > $total_paginas){$pagina = $total_paginas;}
}

$destaques = getDestaquesPagina($pagina);

?>

<!--Parte do Meio-->
<main class="container main-destaques">
    <!-- Área Destaques -->
    <div class="row">
        <div class="col-12 conteudo conteudo-main mx-auto">
            <div class="linha linha-superior"></div>
            <h1 class="col text-center">
                Destaques
            </h1>
            <!--Cards destaques-->

            <div class="col mx-auto area-cards-destaques">

                <?php foreach($destaques as $d): ?>

                    <div class="card card-destaques">
                        <img src="<?= $d["imagem"]; ?>" alt="<?= $d["titulo"]; ?>" class="card-img-destaques">
                        <div class="card-body card-paginas body-destaques">
                            <h5 class="card-title"><?= $d["titulo"]; ?></h5>
                            <p class="card-text"><?= substr($d["texto"], 0, 100); ?>...</p>
                            <div class="botao-ver-mais" id="botao-ver-mais-3">
                                <img src="imagens/buttons_icons/vermais.svg" alt="Ver-mais-2" class="imagem-botao" id="imagem-original-2">
                                <img src="imagens/buttons_icons/vermaisHover.svg" alt="Ver-mais-hover-2" class="imagem-botao" id="imagem-hover-2">
                                <a href="destaque_especifico.php?id=<?= $d["id"]; ?>" class="link-botao" id ="ver-mais-2">Ver mais</a>
                            </div>

                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
            
                
            <!--Paginaçao-->

            <div class="paginacao">

                <?php if($pagina != 0): ?>

                    <form action="" method="get">
                        <input type="hidden" name="pagina" value="<?= $pagina-1; ?>">
                        <input type="image" src="imagens/buttons_icons/arrow1.svg" alt="anterior" class="icones-paginas">
                    </form>    
                    
                <?php endif; ?>

                <?php for($i=1; $i<=$total_paginas; $i++): ?>

                    <form action="" method="get">

                        <input type="hidden" name="pagina" value="<?= $i; ?>">
                        <div class="botoes-pagina icones-paginas">
                            <input type="image" src="imagens/buttons_icons/num3.svg" alt="pagina <?= $i; ?>" class="<?= ($i == $pagina) ? 'active' : ''; ?>">
                            <span class="numeros-pagina"><?= $i; ?></span>
                        </div>
                            
                    </form>

                <?php endfor; ?>

                <?php if($pagina <= $total_paginas): ?>

                    <form action="" method="get">

                        <input type="hidden" name="pagina" value="<?= $pagina+1; ?>">
                        <input type="image" src="imagens/buttons_icons/arrow2.svg" alt="proxima" class="icones-paginas">

                    </form>

                <?php endif; ?>

            </div>

        </div>
    </div>
</main>
