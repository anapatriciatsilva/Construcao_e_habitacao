<?php

$centro_ferias = getCentroFerias();

$form = isset($_GET["titulo"]) && isset($_GET["imagem_1"]) && isset($_GET["texto"]) && isset($_GET["imagem_2"]) && isset($_GET["imagem_3"]) && isset($_GET["imagem_4"]) && isset($_GET["imagem_5"]);
if($form){
    $titulo = $_GET["titulo"];
    $imagem_1 = $_GET["imagem_1"];
    $texto = $_GET["texto"];
    $imagem_2 = $_GET["imagem_2"];
    $imagem_3 = $_GET["imagem_3"];
    $imagem_4 = $_GET["imagem_4"];
    $imagem_5 = $_GET["imagem_5"];
    iduSQL("UPDATE centro_ferias SET titulo='$titulo', imagem_1='$imagem_1', texto='$texto', imagem_2='$imagem_2', imagem_3='$imagem_3', imagem_4='$imagem_4', imagem_4='$imagem_5'");
    header("Location: centro_ferias.php");
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
            <h3>Centro de Férias - Edição</h3>
        </div>
    </div>

    <div class="row my-3">
        <form class="col-12">

            <label class="my-2" for="texto">Título:</label><br>
            <input type="text" name="titulo" id="titulo" required style="width: 600px;" value="<?= $centro_ferias["titulo"]; ?>">

            <br><br>

            <label class="my-1" for="imagem_1">Imagem 1:</label>
            <br>
            <input type="text" name="imagem_1" class="my-2" id="imagem_1" required style="width: 600px;" value="<?= $centro_ferias["imagem_1"]; ?>">
            <br>
            <a class="my-2 text-decoration-none" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p="> 
                Gestor de Ficheiros
            </a>
            
            <br><br>
            <label class="my-2" for="texto">Texto:</label><br>
            <textarea name="texto" id="texto" cols="120" rows="20"><?= $centro_ferias["texto"]; ?></textarea>

            <br><br>

            <label for="imagem_2">Imagem 2:</label><br>
            <input type="text" name="imagem_2" class="my-2" id="imagem_2" required style="width: 600px;" value="<?= $centro_ferias["imagem_2"]; ?>">
            <br>
            <label for="imagem_3">Imagem 3:</label><br>
            <input type="text" name="imagem_3" class="my-2" id="imagem_3" required style="width: 600px;" value="<?= $centro_ferias["imagem_3"]; ?>">
            <br>
            <label for="imagem_4">Imagem 4:</label><br>
            <input type="text" name="imagem_4" class="my-2" id="imagem_4" required style="width: 600px;" value="<?= $centro_ferias["imagem_4"]; ?>">
            <br>
            <label for="imagem_5">Imagem 5:</label><br>
            <input type="text" name="imagem_5" class="my-2" id="imagem_5" required style="width: 600px;" value="<?= $centro_ferias["imagem_5"]; ?>">
            <br>
            <a class="my-2 text-decoration-none" target="_blank" href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager.php?p="> 
                Gestor de Ficheiros
            </a>
            <br><br>

            <input type="submit" value="Gravar">

        </form>

    </div>

</main>