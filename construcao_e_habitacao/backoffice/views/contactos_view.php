<?php

$contactos = getContactos();

?>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Contactos</h3>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">

            <table class="my-4">
                <tr>
                    <th>Morada</th>
                    <th>Telefone</th>
                    <th>Fax</th>
                    <th>E-mail</th>
                    <th>Link Facebook</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>
                        <?= $contactos["morada"]; ?>
                    </td>
                    <td>
                        <?= $contactos["telefone"]; ?>                      
                    </td>
                    <td>
                        <?= $contactos["fax"]; ?>                      
                    </td>
                    <td>
                        <?= $contactos["email"]; ?>
                    </td>
                    <td>
                        <?= $contactos["link_facebook"]; ?>
                    </td>
                    <td>
                        <a href="contactos_editar.php"><button>Editar</button></a>
                    </td>
                </tr>
            </table>

        </div>

    </div>

</main>