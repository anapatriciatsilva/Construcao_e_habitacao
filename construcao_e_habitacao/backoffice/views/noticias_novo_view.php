<?php

$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);
if($form){
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    iduSQL("INSERT INTO noticias (imagem, titulo, texto) VALUES ('$imagem', '$titulo', '$texto')");
    header("Location: noticias.php");
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
            <h3>Notícias - Novo</h3>
        </div>
    </div>

    <div class="row my-3">
        <form class="col-12">

            <label class="my-1" for="imagem">Imagem:</label><br>
            <input type="text" name="imagem" id="imagem" required style="width: 600px;">
            <br>
            <a target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                Gestor de Ficheiros
            </a>

            <br><br>

            <label class="my-1" for="titulo">Título:</label><br>
            <input type="text" name="titulo" id="titulo" required style="width: 600px;">

            <br><br>

            <label class="my-1" for="texto">Texto:</label><br>
            <textarea name="texto" id="texto" cols="120" rows="20"></textarea>

            <br><br>

            <input type="submit" value="Gravar">

        </form>

    </div>

</main>