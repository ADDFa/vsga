<?php

define("HOST", $_SERVER["HTTP_HOST"]);

function getFullUri(string $name): string
{
    return "/views/{$name}.php";
}

function uri(): string
{
    switch ($_SERVER["SCRIPT_NAME"]) {
        case getFullUri("paket-wisata"):
            return "paket-wisata";

        case getFullUri("pesanan"):
            return "pesanan";

        default:
            return "home";
    }
}
