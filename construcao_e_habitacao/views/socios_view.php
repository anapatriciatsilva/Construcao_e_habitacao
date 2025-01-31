<?php

$socios = getSocios();

?>

<!--Parte do Meio-->
<main class="container main-socios">
    <!-- Sócios -->
    <div class="row">
        <div class="col-12 conteudo conteudo-main mx-auto">
            <div class="linha linha-superior"></div>
            <h1 class="col text-center">
                <?= $socios["titulo"]; ?>
            </h1>
            <div class="col texto-paginas-mobile area-texto">

                <?= $socios["texto"]; ?>
                
            </div>
            
        </div>
    </div>

</main>