<?php
require_once("../app/core.php");
require_once("../assets/data/pesanan.php");
require_once("../layouts/header.php");

?>

<div class="container">
    <h1>DAFTAR PESANAN</h1>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Durasi</th>
                <th scope="col">Harga</th>
                <th scope="col">Total Tagihan</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pesanan as $i => $p) : ?>
                <tr>
                    <th scope="row"><?= ++$i ?></th>
                    <td><?= $p["nama"] ?></td>
                    <td><?= $p["no_telp"] ?></td>
                    <td><?= $p["tanggal_pesan"] ?></td>
                    <td><?= $p["lama_perjalanan"] ?> Hari</td>
                    <td><?= $p["harga_paket"] ?></td>
                    <td><?= $p["total_tagihan"] ?></td>
                    <td class="text-center">
                        <a href="/views/edit-pesanan.php?id=<?= $p["id"] ?>" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger" data-id="<?= $p["id"] ?>" data-name="btn-hapus-pesanan">Hapus</button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php require_once("../layouts/footer.php") ?>