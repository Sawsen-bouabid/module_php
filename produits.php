<?php


$products = [
    "produit_1" => [
        "Name" => "Helicopter ",
        "Model" => "H7524 Rouge",
        "weight" => 450,
        "price" => 60000,
        "Discount" => 20,
        "picture" => "hélécopter1.jpg",
    ],
    "produit_2" => [
        "Name" => "Avion_luxe ",
        "Model" => "A5247 Or",
        "weight" => 1500,
        "price" => 180000,
        "Discount" => 20,
        "picture" => "Avion_de_luxe_2.jpg",
    ],


    "produit_3" => [
        "Name" => "Avion_Standard ",
        "Model" => "S6542 Blanc",
        "weight" => 1500,
        "price" => 12000,
        "Discount" => 20,
        "picture" => "Avion-standard_4.jpg",
    ],

]; global $products;
$keys = array_keys($products);
$values = array_values($products);

