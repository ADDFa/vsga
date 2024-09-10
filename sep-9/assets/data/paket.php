<?php

$paket = query("SELECT * FROM paket_wisata");

function findPaket($id)
{
    $paket = query("SELECT * FROM paket_wisata WHERE id='{$id}'")[0];
    return $paket;
}
