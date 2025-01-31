<?php

$centro_ferias = getCentroFerias();

?>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Centro de Férias</h3>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <table>
                <tr>
                    <th>Título</th>
                    <th>Imagem Principal</th>
                    <th>Texto</th>
                    <th>Imagens Secundárias</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td><?= $centro_ferias["titulo"]; ?></td>
                    <td>
                        <img src="<?= $centro_ferias["imagem_1"]; ?>" alt="<?= $centro_ferias["imagem_1"]; ?>" width="200">
                    </td>
                    <td>
                        <?= substr($centro_ferias["texto"], 0, 50); ?> ...
                    </td>
                    <td>
                        <img class="m-2" src="<?= $centro_ferias["imagem_2"]; ?>" alt="<?= $centro_ferias["imagem_2"]; ?>" width="200">
                        <img class="m-2" src="<?= $centro_ferias["imagem_3"]; ?>" alt="<?= $centro_ferias["imagem_3"]; ?>" width="200">
                        <img class="m-2" src="<?= $centro_ferias["imagem_4"]; ?>" alt="<?= $centro_ferias["imagem_4"]; ?>" width="200">
                        <img class="m-2" src="<?= $centro_ferias["imagem_5"]; ?>" alt="<?= $centro_ferias["imagem_5"]; ?>" width="200">
                    </td>
                    <td>
                        <a href="centro_ferias_editar.php?id=<?= $centro_ferias["id"]; ?>"><button>Editar</button></a>
                    </td>
                </tr>
            </table>

        </div>

    </div>

</main>