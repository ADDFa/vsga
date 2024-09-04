<?php

include("../data/price-list.php");

$data = [
    "discount"    => 0,
    "price"     => 0,
    "total"     => 0,
    "products"  => []
];

if (isset($_POST) && $_POST) {
    // hitung total harga dan input product ke list
    $products = [];
    $price = 0;
    foreach ($_POST as $name => $val) {
        $productPrice = $priceList[$name];
        $productName = str_replace("_", " ", $name);
        $productName = ucfirst($productName);

        $price += $productPrice;
        array_push($products, [
            "name"  => $productName,
            "cost"  => $productPrice
        ]);
    }
    $data["price"] = $price;
    $data["products"] = $products;

    // hitung diskon
    $discount = 0;
    if ($price >= 50000 && $price < 100000) {
        $discount = 5;
    } elseif ($price >= 100000) {
        $discount = 10;
    }
    $data["discount"] = $discount;

    // hitung total harga setelah diskon
    $total = $price;
    if ($discount) {
        $discountPrice = ($discount / 100) * $price;
        $total -= $discountPrice;
    }
    $data["total"] = $total;
} else {
    header("Location:http://localhost:8000");
}
