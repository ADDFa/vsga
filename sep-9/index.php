<?php

require_once("./app/core.php");
require_once("./layouts/header.php");
require_once("./assets/data/paket.php");

?>


<section class="main">
    <div class="text-center w-100">
        <h1 class="fw-bold">BUKIT KABA</h1>
        <h3 class="fw-bold">Desa Wisata Sumber Urip Rejang Lebong Bengkulu Indonesia</h3>
    </div>
</section>

<div class="w-75 mt-3 mx-auto">
    <div class="row row-cols-3">
        <?php foreach ($paket as $paket) : ?>
            <div class="col">
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $paket["path_img"] ?>" alt="<?= $paket["path_img"] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $paket["nama"] ?></h5>
                            <p class="card-text"><?= $paket["deskripsi"] ?></p>
                            <a href="/views/paket-wisata.php" class="btn btn-primary"><?= $paket["nama"] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class="w-75 mx-auto mt-3 text-center">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/d-yaEdr_-mI?si=lv_Cav0TxGO2OQ59" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<?php require_once("./layouts/footer.php") ?>