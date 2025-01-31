<?php

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $destaque_especifico = getDestaqueEspecifico($id);
    $form_2 = isset($_GET["titulo"]) && isset($_GET["mostrar_na_home"]) && isset($_GET["texto"]) && isset($_GET["imagem"]);
    if($form_2){
        $titulo = $_GET["titulo"];
        $mostrar_na_home = $_GET["mostrar_na_home"];
        $texto = $_GET["texto"];
        $imagem = $_GET["imagem"];
        iduSQL("UPDATE destaques SET titulo='$titulo', mostrar_na_home='$mostrar_na_home', texto='$texto', imagem='$imagem' WHERE id=$id");
        header("Location: destaques.php");
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
            <h3>Destaques - Edição</h3>
        </div>
    </div>

    <div class="row my-4">
        <form class="col-12">

            <input type="hidden" name="id" value="<?= $id; ?>">

            <label for="titulo">Título:</label><br>
            <input type="text" name="titulo" id="titulo" required style="width: 600px;" value="<?= $destaque_especifico["titulo"]; ?>">

            <br><br>

            <label for="mostrar_na_home">Aparecer na Home:</label><br>
            <select name="mostrar_na_home" id="mostrar_na_home">
                <option value="1" <?= ($destaque_especifico["mostrar_na_home"] == 1) ? "selected" : ""; ?>>Sim</option>
                <option value="0" <?= ($destaque_especifico["mostrar_na_home"] == 0) ? "selected" : ""; ?>>Não</option>
            </select>

            <br><br>

            <label for="imagem">Imagem:</label><br>
            <input type="text" name="imagem" id="imagem" required style="width: 600px;" value="<?= $destaque_especifico["imagem"]; ?>">
            <br>
            <a target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                Gestor de Ficheiros
            </a>
            
            <br><br>

            <label for="texto">Texto:</label><br>
            <textarea name="texto" id="texto" cols="120" rows="20"><?= $destaque_especifico["texto"]; ?></textarea>

            <br><br>

            <input type="submit" value="Gravar"> 

        </form>

    </div>

</main>