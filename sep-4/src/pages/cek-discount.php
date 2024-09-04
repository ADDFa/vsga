<?php include("../functions/calculate-discount.php") ?>

<?php include("../components/header.php") ?>

<section class="container">
    <?php include("../components/title.php") ?>

    <div class="card my-5">
        <div class="card-header">
            <h5 class="card-title text-center">Total Belanjaan</h5>
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1>
                    <span class="text-danger">Rp.</span>
                    <?php if ($data["discount"]) : ?>
                        <span class="text-secondary fs-5 text-decoration-line-through"><?= $data["price"] ?></span>
                    <?php endif ?>
                    <span class="text-danger"><?= $data["total"] ?></span>
                </h1>

                <?php if ($data["discount"]) : ?>
                    <p class="text-success" role="alert">Selamat anda mendapatkan diskon sebesar <?= $data["discount"] ?>%</p>
                <?php endif ?>
            </div>

            <h5 class="fw-bold">Rincian Harga</h5>
            <ol class="list-group list-group-numbered">
                <?php foreach ($data["products"] as $product) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><?= $product["name"] ?></div>
                        </div>
                        <span class="badge text-bg-primary rounded-pill"><?= $product["cost"] ?></span>
                    </li>
                <?php endforeach ?>
            </ol>
        </div>
    </div>
</section>

<?php include("../components/footer.php") ?>