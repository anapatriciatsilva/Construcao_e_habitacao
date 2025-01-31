<?php

$contactos = getContactos();

$form = isset($_GET["morada"]) && isset($_GET["telefone"]) && isset($_GET["email"]) && isset($_GET["link_facebook"]);
if($form){
    $morada = $_GET["morada"];
    $telefone = $_GET["telefone"];
    $email = $_GET["email"];
    $link_facebook = $_GET["link_facebook"];
    iduSQL("UPDATE contactos SET morada='$morada', telefone='$telefone',  email='$email', link_facebook='$link_facebook'");
    header("Location: contactos.php");
}

?>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Contactos - Edição</h3>
        </div>
    </div>

    <div class="row my-3">
        <form class="col-12">

            <label for="morada">Morada:</label><br>
            <input type="text" name="morada" id="morada" required style="width: 600px;" value="<?= $contactos["morada"]; ?>">
            
            <br><br>

            <label for="telefone">Telefone:</label><br>
            <input type="text" name="telefone" id="telefone" required style="width: 600px;" value="<?= $contactos["telefone"]; ?>">
            
            <br><br>

            <label for="telefone">Fax:</label><br>
            <input type="text" name="telefone" id="telefone" required style="width: 600px;" value="<?= $contactos["fax"]; ?>">
            
            <br><br>

            
            <label for="email">E-mail:</label><br>
            <input type="email" name="email" id="email" required style="width: 600px;" value="<?= $contactos["email"]; ?>">

            <br><br>

            <label for="link_facebook">Link Facebook:</label><br>
            <input type="url" name="link_facebook" id="link_facebook" required style="width: 600px;" value="<?= $contactos["link_facebook"]; ?>">

            <br><br>

            <input type="submit" value="Gravar">

        </form>

    </div>

</main>