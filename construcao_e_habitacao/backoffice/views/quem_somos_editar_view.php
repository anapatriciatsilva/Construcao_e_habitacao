<?php

$quem_somos = getQuemSomos();

$form = isset($_GET["titulo"]) && isset($_GET["imagem"]) && isset($_GET["texto"]);
if($form){
    $titulo = $_GET["titulo"];
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];
    iduSQL("UPDATE quem_somos SET titulo='$titulo', imagem='$imagem', texto='$texto'");
    header("Location: quem_somos.php");
}

?>

<script>
    tinymce.init({
    selector: 'textarea'
    });
</script>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Quem Somos  - Edição</h3>
        </div>
    </div>

    <div class="row my-3">
        <form class="col-12">

            <label class="my-2" for="texto">Título:</label><br>

            <input type="text" name="titulo" id="titulo" required style="width: 600px;" value="<?= $quem_somos["titulo"]; ?>">

            <br><br>

            <label class="my-1" for="imagem">Imagem:</label>
            <br>
            <input type="text" name="imagem" class="my-2" id="imagem" required style="width: 600px;" value="<?= $quem_somos["imagem"]; ?>">
            <br>
            <a class="my-2 text-decoration-none" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p="> 
                Gestor de Ficheiros
            </a>
            <!-- <a class="my-2" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                
            </a> -->
            <br><br>
            <label class="my-2" for="texto">Texto:</label><br>
            <textarea name="texto" id="texto" cols="120" rows="20"><?= $quem_somos["texto"]; ?></textarea>

            <br><br>

            <input type="submit" value="Gravar">

        </form>

    </div>

</main>