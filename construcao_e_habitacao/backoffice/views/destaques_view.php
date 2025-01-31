<?php

$destaques = getTodosDestaques();

?>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Destaques</h3>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
            <a href="destaques_novo.php"><button>Novo</button></a>

            <table class="my-4">
                <tr>
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($destaques as $e): ?>
                    <tr>
                        <td>
                            <img src="<?= $e["imagem"]; ?>" alt="<?= $e["imagem"]; ?>" width="200">
                        </td>
                        <td>
                            <?= $e["titulo"]; ?>
                        </td>
                        <td>
                            <?= substr($e["texto"], 0, 50); ?>..
                        </td>
                        <td>
                            <a href="destaques_editar.php?id=<?= $e["id"] ?>"><button>Editar</button></a>
                            <br><br>
                            <a href="destaques_apagar.php?id=<?= $e["id"] ?>"><button>Apagar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>

    </div>

</main>