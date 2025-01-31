<?php

$quem_somos = getQuemSomos();

?>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Quem Somos</h3>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <table>
                <tr>
                    <th>Título</th>
                    <th>Imagem</th>
                    <th>Texto</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td><?= $quem_somos["titulo"]; ?></td>
                    <td>
                        <img src="<?= $quem_somos["imagem"]; ?>" alt="<?= $quem_somos["imagem"]; ?>" width="200">
                    </td>
                    <td>
                        <?= substr($quem_somos["texto"], 0, 50); ?> ...
                    </td>
                    <td>
                        <a href="quem_somos_editar.php?id=<?= $quem_somos["id"]; ?>"><button>Editar</button></a>
                    </td>
                </tr>
            </table>

        </div>

    </div>

</main>