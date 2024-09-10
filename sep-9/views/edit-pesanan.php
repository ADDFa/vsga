<?php

require_once "../app/core.php";
require_once "../assets/data/pesanan.php";
require_once "../layouts/header.php";

$pesanan = findPesanan($_GET["id"]);

?>

<div class="container">
    <form action="/functions/update-paket.php" method="POST" id="form-paket-wisata">
        <h1>FORM PEMESANAN PAKET WISATA</h1>

        <input type="hidden" name="id" value="<?= $pesanan["id"] ?>">

        <div class="mb-3">
            <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="nama-pemesan" name="nama" value="<?= $pesanan["nama"] ?>" required>
        </div>
        <div class="mb-3">
            <label for="no-telp" class="form-label">Nomor HP/Telp</label>
            <input type="tel" class="form-control" id="no-telp" name="no_telp" value="<?= $pesanan["no_telp"] ?>" required>
        </div>
        <div class="mb-3">
            <label for="tanggal-pesan" class="form-label">Tanggal Pesan</label>
            <input type="date" class="form-control" id="tanggal-pesan" name="tanggal_pesan" value="<?= $pesanan["tanggal_pesan"] ?>" required>
        </div>
        <div class="mb-3">
            <label for="lama-perjalanan" class="form-label">Lama Perjalanan (hari)</label>
            <input type="number" class="form-control" id="lama-perjalanan" name="lama_perjalanan" value="<?= $pesanan["lama_perjalanan"] ?>">
        </div>
        <div class="mb-3">
            <h5>Pelayanan Paket Perjalanan</h5>
            <div class="mb-3">
                <input type="checkbox" class="form-check-input" id="penginapan" name="penginapan" value="1" <?= $pesanan["penginapan"] == "1" ? "checked" : "" ?>>
                <label for="penginapan" class="form-label">Penginapan (Rp. 1.000.000)</label>
            </div>
            <div class="mb-3">
                <input type="checkbox" class="form-check-input" id="transportasi" name="transportasi" value="1" <?= $pesanan["transportasi"] == "1" ? "checked" : "" ?>>
                <label for="transportasi" class="form-label">Transportasi (Rp. 1.200.000)</label>
            </div>
            <div class="mb-3">
                <input type="checkbox" class="form-check-input" id="servis" name="servis" value="1" <?= $pesanan["servis"] == "1" ? "checked" : "" ?>>
                <label for="servis" class="form-label">Servis/Makan (Rp. 500.000)</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="jumlah-peserta" class="form-label">Jumlah Peserta</label>
            <input type="number" class="form-control" id="jumlah-peserta" name="jumlah_peserta" value="<?= $pesanan["jumlah_peserta"] ?>">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Paket Perjalanan</label>
            <input type="text" class="form-control" id="harga" disabled value="<?= $pesanan["harga_paket"] ?>">
            <input type="hidden" name="harga_paket">
        </div>
        <div class="mb-3">
            <label for="jumlah-tagihan" class="form-label">Jumlah Tagihan</label>
            <input type="text" class="form-control" id="jumlah-tagihan" disabled value="<?= $pesanan["total_tagihan"] ?>">
            <input type="hidden" name="total_tagihan">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-primary" type="button">Hitung</button>
            <button class="btn btn-danger" type="button">Reset</button>
        </div>
    </form>
</div>

<?php require_once "../layouts/footer.php"; ?>