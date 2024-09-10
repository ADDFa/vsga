<?php

require_once __DIR__ . "/query.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$noTelp = $_POST["no_telp"];
$tanggalPesan = $_POST["tanggal_pesan"];
$lamaPerjalanan = $_POST["lama_perjalanan"];
$jumlahPeserta = $_POST["jumlah_peserta"];
$totalTagihan = $_POST["total_tagihan"];
$hargaPaket = $_POST["harga_paket"];
$penginapan = isset($_POST["penginapan"]) ? "1" : "0";
$transportasi = isset($_POST["transportasi"]) ? "1" : "0";
$servis = isset($_POST["servis"]) ? "1" : "0";

$result = query("UPDATE pesanan SET nama='$nama', no_telp='$noTelp', tanggal_pesan='$tanggalPesan', lama_perjalanan='$lamaPerjalanan', jumlah_peserta='$jumlahPeserta', total_tagihan='$totalTagihan', harga_paket='$hargaPaket', penginapan='$penginapan', transportasi='$transportasi', servis='$servis' WHERE id='$id'");

$status = $result ? "success" : "failed";
header("Location: http://localhost:8000/views/pesanan.php?status=$status");
