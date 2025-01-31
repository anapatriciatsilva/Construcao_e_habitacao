<?php

$socios = getSocios();

$form = isset($_GET["titulo"]) && isset($_GET["texto"]);
if($form){
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    iduSQL("UPDATE socios SET titulo='$titulo', texto='$texto'");
    header("Location: socios.php");
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
            <h3>Sócios - Edição</h3>
        </div>
    </div>

    <div class="row my-3">
        <form class="col-12">

            <label class="my-2" for="texto">Título:</label><br>
            <input type="text" name="titulo" id="titulo" required style="width: 600px;" value="<?= $socios["titulo"]; ?>">

            <br><br>
        
            <label class="my-2" for="texto">Texto:</label><br>
            <textarea name="texto" id="texto" cols="120" rows="20"><?= $socios["texto"]; ?></textarea>

            <br><br>

            <input type="submit" value="Gravar">

        </form>

    </div>

</main>