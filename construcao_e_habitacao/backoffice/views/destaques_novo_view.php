<?php

$form = isset($_GET["titulo"]) && isset($_GET["mostrar_na_home"]) && isset($_GET["texto"]) && isset($_GET["imagem"]);
if($form){
    $titulo = $_GET["titulo"];
    $mostrar_na_home = $_GET["mostrar_na_home"];
    $texto = $_GET["texto"];
    $imagem = $_GET["imagem"];
    iduSQL("INSERT INTO destaques (titulo, mostrar_na_home, texto, imagem) VALUES ('$titulo', '$mostrar_na_home', '$texto', '$imagem')");
    header("Location: destaques.php");
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
            <h3>Destaques - Novo</h3>
        </div>
    </div>

    <div class="row my-3">
        <form class="col-12">

            <label class="my-1" for="titulo">Título:</label><br>
            <input type="text" name="titulo" id="titulo" required style="width: 600px;">

            <br><br>

            <label class="my-1" for="mostrar_na_home">Aparecer na Home:</label><br>
            <select name="mostrar_na_home" id="mostrar_na_home">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>

            <br><br>

            <label class="my-1" for="imagem">Imagem:</label><br>
            <input type="text" name="imagem" id="imagem" required style="width: 600px;">
            <br>
            <a target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                Gestor de Ficheiros
            </a>
        
            <br><br>

            <label class="my-1" for="texto">Texto:</label><br>
            <textarea name="texto" id="texto" cols="120" rows="20"></textarea>

            <br><br>

            <input type="submit" value="Gravar">

        </form>

    </div>

</main>