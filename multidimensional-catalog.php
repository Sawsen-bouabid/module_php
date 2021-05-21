<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta
            name="description"
            content="Le meilleur service de location d'avions privés en France. Confort, sécurité et commodité."
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- CSS only -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
            crossorigin="anonymous"
    />

    <!--<link href="css\style.css" rel="stylesheet" /> -->
    <title>Location d'Avion Privé</title>
    <link href="css\style.css" rel="stylesheet"/>
    <title>Location location d'Avion Privé</title>
</head>

<header>
    <?php
    include 'header.php'; ?>
</header>


<body>
<h2> Catalogue Produits</h2>


<?php
$products = [
    "product_1" => [
        "Name" => "Helicopter ",
        "Model" => "H7524 Rouge",
        "Price" => "500$/day",
        "Discount" => "Discount 20%",
        "Picture" => "https://th.bing.com/th/id/OIP.lU5_uQumNiu5th9kSVIaRwHaE8?pid=ImgDet&rs=1",
    ],
    "product_2" => [
        "Name" => "Avion_luxe ",
        "Model" => "A5247 Or",
        "Price" => "1200$/day",
        "Discount" => "Discount 20%",
        "Picture" => "https://i.pinimg.com/originals/8d/56/71/8d56715bfb19e9c07ee0cd25ebc5aa36.jpg",
    ],


    "product_3" => [
        "Name" => "Avion_Standard ",
        "Model" => "S6542 Blanc",
        "Price" => "1000$/day",
        "Discount" => "Discount 20%",
        "Picture" => "https://th.bing.com/th/id/Re9cf8e1b8f6aa0174cc00c0a37c10afb?rik=mybImVADQBWIQQ&pid=ImgRaw",
    ],

]; ?>
<table>
    <tr>
        <td> <?php
            echo "<img src=\"" . $products['product_1']['Picture'] . "\"alt=\"\" width=\"400\">";
            ?></td>

        <td> <?php
            echo "<img src=\"" . $products['product_2']['Picture'] . "\"alt=\"\" width=\"400\">";
            ?></td>
        <td> <?php
            echo "<img src=\"" . $products['product_3']['Picture'] . "\"alt=\"\" width=\"400\">";
            ?></td>

    </tr>
    <tr>
        <td> <?php
            print_r($products['product_1']['Name']); ?></td>

        <td> <?php
            print_r($products['product_2']['Name']); ?> </td>
        <td>
            <?php
            print_r($products['product_3']['Name']); ?> </td>

    </tr>
    <tr>
        <td> <?php
            print_r($products['product_1']['Model']); ?></td>

        <td> <?php
            print_r($products['product_2']['Model']); ?> </td>
        <td>
            <?php
            print_r($products['product_3']['Model']); ?> </td>

    </tr>
    <tr>
        <td> <?php
            print_r($products['product_1']['Price']); ?></td>

        <td> <?php
            print_r($products['product_2']['Price']); ?> </td>
        <td>
            <?php
            print_r($products['product_3']['Price']); ?> </td>

    </tr>
    <tr>
        <td> <?php
            print_r($products['product_1']['Discount']); ?></td>

        <td> <?php
            print_r($products['product_2']['Discount']); ?> </td>
        <td>
            <?php
            print_r($products['product_3']['Discount']); ?> </td>

    </tr>
</table>


</body>
<footer> <?php
    include 'footer.php'; ?> ;
</footer>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"
></script>
</html>














