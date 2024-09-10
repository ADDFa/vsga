<?php

$pesanan = query("SELECT * FROM pesanan");

function findPesanan($id)
{
    $pesanan = query("SELECT * FROM pesanan WHERE id='{$id}'")[0];
    return $pesanan;
}
