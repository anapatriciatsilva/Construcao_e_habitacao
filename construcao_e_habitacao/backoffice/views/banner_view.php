<?php

$banner = getBanner();

?>

<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Banner</h3>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
            <a href="banner_novo.php"><button>Novo</button></a>

            <table class="my-4">
                <tr>
                    <th>Nome da página</th>
                    <th>Imagem</th>
                    <th>Imagem - Mobile</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($banner as $b): ?>
                    <tr>
                        <td>
                            <?= $b["pagina"]; ?>
                        </td>

                        <td>
                            <img src="<?= $b["imagem"]; ?>" alt="" width="200">
                        </td>

                        <td>
                            <img src="<?= $b["imagem_mobile"]; ?>" alt="" width="200">
                        </td>
                    
                        <td>
                            <a href="banner_editar.php?id=<?= $b["id"]; ?>"><button>Editar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>

    </div>

</main>