<?php

$empreendimentos = getEmpreendimentos();

?>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Empreendimentos</h3>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
            <a href="empreendimentos_novo.php"><button>Novo</button></a>

            <table class="my-4">
                <tr>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Imagem</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($empreendimentos as $e): ?>
                    <tr>
                        <td>
                            <?= $e["titulo"]; ?>
                        </td>
                        <td>
                            <?= substr($e["texto"], 0, 50); ?>...
                        </td>
                        <td>
                            <img src="<?= $e["imagem_1"]; ?>" alt="<?= $e["imagem_1"]; ?>" width="200">
                        </td>
                    
                        <td>
                            <a href="empreendimentos_editar.php?id=<?= $e["id"] ?>"><button>Editar</button></a>
                            <br><br>
                            <a href="empreendimentos_apagar.php?id=<?= $e["id"] ?>"><button>Apagar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>

    </div>

</main>