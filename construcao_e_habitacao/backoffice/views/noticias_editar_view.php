<?php

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $noticia_especifica = getNoticiaEspecifica($id);
    $form_2 = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);
    if($form_2){
        $imagem = $_GET["imagem"];
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        iduSQL("UPDATE noticias SET imagem='$imagem', titulo='$titulo', texto='$texto' WHERE id=$id");
        header("Location: noticias.php");
    }
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
            <h3>Noticias - Edição</h3>
        </div>
    </div>

    <div class="row my-4">
        <form class="col-12">

            <input type="hidden" name="id" value="<?= $id; ?>">

            <label class="my-1" for="imagem">Imagem:</label><br>
            <input type="text" name="imagem" id="imagem" required style="width: 600px;" value="<?= $noticia_especifica["imagem"]; ?>">
            <br>
            <a class="my-1" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                Gestor de Ficheiros
            </a>

            <br><br>

            <label class="my-1" for="titulo">Título:</label><br>
            <input type="text" name="titulo" id="titulo" required style="width: 600px;" value="<?= $noticia_especifica["titulo"]; ?>">

            <br><br>

            <label class="my-1" for="texto">Texto:</label><br>
            <textarea name="texto" id="texto" cols="120" rows="20"><?= $noticia_especifica["texto"]; ?></textarea>

            <br><br>

            <input type="submit" value="Gravar"> 

        </form>

    </div>

</main>