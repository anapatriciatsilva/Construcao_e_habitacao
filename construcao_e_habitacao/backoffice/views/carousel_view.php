<?php

$carousel = getCarousel();

?>


<main class="container-fluid my-4 text-center">

    <div class="row">
        <div class="col-12">
            <h3>Carousel</h3>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
            <a href="carousel_novo.php"><button>Novo</button></a>

            <table class="my-4">
                <tr>
                    <th>Imagem</th>
                    <th>Imagem - Mobile</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($carousel as $c): ?>
                    <tr>
                        <td>
                            <img src="<?= $c["imagem"]; ?>" alt="<?= $c["imagem"]; ?>" width="200">
                        </td>
                        <td>
                            <img src="<?= $c["imagem_mobile"]; ?>" alt="<?= $c["imagem_mobile"]; ?>" width="200">
                        </td>
                    
                        <td>
                            <a href="carousel_editar.php?id=<?= $c["id"]; ?>"><button>Editar</button></a>
                            <br><br>
                            <a href="carousel_apagar.php?id=<?= $c["id"]; ?>"><button>Apagar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>

    </div>

</main>