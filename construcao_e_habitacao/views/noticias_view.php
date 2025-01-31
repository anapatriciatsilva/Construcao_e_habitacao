<?php 

$total_paginas = getTotalPaginasNoticias();
$pagina = 1;

$form = isset($_GET["pagina"]);
if($form){
    $pagina = intval($_GET["pagina"]);
    if($pagina < 1){$pagina = 1;}
    elseif($pagina > $total_paginas){$pagina = $total_paginas;}
}

$noticias = getNoticiasPagina($pagina);

?>

<!--Parte do Meio-->
<main class="container main-noticias">
    <!-- Área Noticias -->
    <div class="row">
        <div class="col-12 conteudo conteudo-main mx-auto">
            <div class="linha linha-superior"></div>
            <h1 class="col text-center">
                Notícias
            </h1>
            <!--Cards noticias-->
            <div class="col mx-auto area-cards-noticias">

                <?php foreach($noticias as $n): ?>

                    <div class="card card-noticias">
                        <img src="<?= $n["imagem"]; ?>" class="card-img-paginas">
                        <div class="card-body card-paginas">
                            <h5 class="card-title"><?= $n["titulo"]; ?></h5>
                            <p class="card-text"><?= substr($n["texto"], 0, 100); ?>...</p>
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
