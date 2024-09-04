<?php include("./components/header.php") ?>

<section class="container">
    <?php include("./components/title.php") ?>

    <div class="card mt-5">
        <div class="card-header">
            <h5 class="card-title text-center">Pilih Barang Belanjaan Sesukamu</h5>
        </div>
        <div class="card-body">
            <form action="./pages/cek-discount.php" method="POST">
                <h6>Barang Belanjaan</h6>

                <div class="row row-cols-2">
                    <div class="col">
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="sendok_makan_stainless_steel" id="sendok_makan_stainless_steel">
                            <label class="form-check-label" for="sendok_makan_stainless_steel">Sendok Makan Stainless Steel (Rp. 6000)</label>
                        </div>
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="garpu_makan_stainless_steel" id="garpu_makan_stainless_steel">
                            <label class="form-check-label" for="garpu_makan_stainless_steel">Garpu Makan Stainless Steel (Rp. 6.500)</label>
                        </div>
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="pisau_dapur_plastik" id="pisau_dapur_plastik">
                            <label class="form-check-label" for="pisau_dapur_plastik">Pisau Dapur Plastik (Rp. 15.000)</label>
                        </div>
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="piring_melamin" id="piring_melamin">
                            <label class="form-check-label" for="piring_melamin">Piring Melamin (Rp. 10.000)</label>
                        </div>
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="gelas_plastik" id="gelas_plastik">
                            <label class="form-check-label" for="gelas_plastik">Gelas Plastik (Rp. 5.500)</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="mangkuk_plastik" id="mangkuk_plastik">
                            <label class="form-check-label" for="mangkuk_plastik">Mangkuk Plastik (Rp. 10.000)</label>
                        </div>
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="wadah_penyimpanan_plastik" id="wadah_penyimpanan_plastik">
                            <label class="form-check-label" for="wadah_penyimpanan_plastik">Wadah Penyimpanan Plastik (Rp. 9.000)</label>
                        </div>
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="sapu_lidi" id="sapu_lidi">
                            <label class="form-check-label" for="sapu_lidi">Sapu Lidi (Rp. 15.000)</label>
                        </div>
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="keset_kain" id="keset_kain">
                            <label class="form-check-label" for="keset_kain">Keset Kain (Rp. 15.000)</label>
                        </div>
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" name="tempat_sabun_dinding" id="tempat_sabun_dinding">
                            <label class="form-check-label" for="tempat_sabun_dinding">Tempat Sabun Dinding (Rp. 10.000)</label>
                        </div>
                    </div>
                </div>

                <button class="mt-4 ms-auto d-block btn btn-success">Bayar Sekarang</button>
            </form>
        </div>
    </div>
</section>