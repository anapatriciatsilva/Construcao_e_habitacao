<?php

$form = isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem_1"]) && isset($_GET["imagem_2"]) && isset($_GET["imagem_3"]) && isset($_GET["imagem_4"]);
if($form){
  $titulo = $_GET["titulo"];
  $texto = $_GET["texto"];
  $imagem_1 = $_GET["imagem_1"];
  $imagem_2 = $_GET["imagem_2"];
  $imagem_3 = $_GET["imagem_3"];
  $imagem_4 = $_GET["imagem_4"];
  iduSQL("INSERT INTO empreendimentos (titulo, texto, imagem_1, imagem_2, imagem_3, imagem_4) VALUES ('$titulo', '$texto', '$imagem_1', '$imagem_2', '$imagem_3', '$imagem_4')");
  header("Location: empreendimentos.php");
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
            <h3>Empreendimentos - Novo</h3>
        </div>
    </div>

    <div class="row my-3">
        <form class="col-12">

            <label class="my-1" for="titulo">Título:</label><br>
            <input type="text" name="titulo" id="titulo" required style="width: 600px;">

            <br><br>

            <label for="imagem_1">Imagem 1:</label><br>
            <input type="text" name="imagem_1" id="imagem_1" required style="width: 600px;">
            <br>
            <label for="imagem_2">Imagem 2:</label><br>
            <input type="text" name="imagem_2" id="imagem_2" style="width: 600px;">
            <br>
            <label for="imagem_3">Imagem 3:</label><br>
            <input type="text" name="imagem_3" id="imagem_3" style="width: 600px;">
            <br>
            <label for="imagem_4">Imagem 4:</label><br>
            <input type="text" name="imagem_4" id="imagem_4" style="width: 600px;">
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