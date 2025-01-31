<?php

$socios = getSocios();

?>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Sócios</h3>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <table>
                <tr>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td><?= $socios["titulo"]; ?></td>
                    <td>
                        <?= substr($socios["texto"], 0, 50); ?> ...
                    </td>
                    <td>
                        <a href="socios_editar.php?id=<?= $socios["id"]; ?>"><button>Editar</button></a>
                    </td>
                </tr>
            </table>

        </div>

    </div>

</main>