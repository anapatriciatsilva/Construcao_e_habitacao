<?php

$noticias = getTodasNoticias();

?>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Notícias</h3>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
            <a href="noticias_novo.php"><button>Novo</button></a>

            <table class="my-4">
                <tr>
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($noticias as $n): ?>
                    <tr>
                        <td>
                            <img src="<?= $n["imagem"]; ?>" alt="<?= $n["imagem"]; ?>" width="200">
                        </td>
                        <td>
                            <?= $n["titulo"]; ?>
                        </td>
                        <td>
                            <?= substr($n["texto"], 0, 50); ?>..
                        </td>
                        <td>
                            <a href="noticias_editar.php?id=<?= $n["id"] ?>"><button>Editar</button></a>
                            <br><br>
                            <a href="noticias_apagar.php?id=<?= $n["id"] ?>"><button>Apagar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>

    </div>

</main>