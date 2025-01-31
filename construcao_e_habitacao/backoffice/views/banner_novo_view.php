<?php

$form = isset($_GET["imagem"]) && isset($_GET["imagem_mobile"]);
if($form){
  $imagem = $_GET["imagem"];
  $imagem_mobile = $_GET["imagem_mobile"];
  iduSQL("INSERT INTO banner (imagem, imagem_mobile) VALUES ('$imagem', '$imagem_mobile')");
  header("Location: banner.php");
}

?>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Banner - Novo</h3>
        </div>
    </div>

    <div class="row my-3">
        <form class="col-12">

            <label for="imagem">Imagem Desktop:</label><br>
            <input type="text" name="imagem" id="imagem" required style="width: 600px;">
            <br><br>
            <label for="imagem_mobile">Imagem Mobile:</label><br>
            <input type="text" name="imagem_mobile" id="imagem_mobile" required style="width: 600px;">
            <br><br>
            <a target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                Gestor de Ficheiros
            </a>

            <br><br>

            <p>Carregar ambas as versões - desktop e mobile!</p>
        
            <br><br>

            <input type="submit" value="Gravar">

        </form>

    </div>

</main>