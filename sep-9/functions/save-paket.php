<?php

require_once __DIR__ . "/query.php";

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

$result = query("INSERT INTO pesanan (nama, no_telp, tanggal_pesan, lama_perjalanan, jumlah_peserta, total_tagihan, harga_paket, penginapan, transportasi, servis) VALUES ('$nama', '$noTelp', '$tanggalPesan', '$lamaPerjalanan', '$jumlahPeserta', '$totalTagihan', '$hargaPaket', '$penginapan', '$transportasi', '$servis')");

$status = $result ? "success" : "failed";
header("Location: http://localhost:8000/views/paket-wisata.php?status=$status");
