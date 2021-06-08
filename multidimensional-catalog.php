<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Le meilleur service de location d'avions privés en France. Confort, sécurité et commodité." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!--<link href="css\style.css" rel="stylesheet" /> -->
    <title>Location d'Avion Privé</title>
    <link href="css\style.css" rel="stylesheet" />
    <title>Location location d'Avion Privé</title>
</head>

<header>
    <?php
    include  'header.php'; ?>
</header>



<body>
    <?php
    include  'my-fonctions.php'; ?>
    <h2> Catalogue Produits</h2>


    <?php
    $products = [
        "produit_1" => [
            "Name" => "Helicopter ",
            "Model" => "H7524 Rouge",
            "Price" => "60000",
            "Discount" => "20",
            "Picture" => "hélécopter1.jpg",
        ],
        "produit_2" => [
            "Name" => "Avion_luxe ",
            "Model" => "A5247 Or",
            "Price" => "180000",
            "Discount" => " 20",
            "Picture" => "Avion_de_luxe_2.jpg",
        ],



        "produit_3" => [
            "Name" => "Avion_Standard ",
            "Model" => "S6542 Blanc",
            "Price" => "120000",
            "Discount" => " 20",
            "Picture" => "Avion-standard_4.jpg",
        ],

    ]; ?>
    <table>
        <tr>
            <td> <?php
                    echo "<img src=\"" . $products['produit_1']['Picture'] . "\"alt=\"\" width=\"600\">";
                    ?></td>

            <td> <?php
                    echo "<img src=\"" . $products['produit_2']['Picture'] . "\"alt=\"\" width=\"600\">";
                    ?></td>
            <td> <?php
                    echo "<img src=\"" . $products['produit_3']['Picture'] . "\"alt=\"\" width=\"600\">";
                    ?></td>

        </tr>
        <tr>
            <td> Name: <?php
                        print_r($products['produit_1']['Name']); ?></td>

            <td> Name : <?php
                        print_r($products['produit_2']['Name']); ?> </td>
            <td> Name :
                <?php print_r($products['produit_3']['Name']); ?> </td>

        </tr>
        <tr>
            <td> Model : <?php
                            print_r($products['produit_1']['Model']); ?></td>

            <td> Model :<?php
                        print_r($products['produit_2']['Model']); ?> </td>
            <td> Model :
                <?php
                print_r($products['produit_3']['Model']); ?> </td>

        </tr>
        <tr>
            <td> Price TTC : <?php
                                formatPrice($products['produit_1']['Price']); ?> </td>

            <td> Price TTC :<?php
                            formatPrice($products['produit_2']['Price']); ?> </td>
            <td> Price TTC :
                <?php
                formatPrice($products['produit_3']['Price']); ?> </td>
        </tr>
        <tr>
            <td>Price TH : <?php
                            formatPrice(priceExludingVAT($products['produit_1']['Price'])); ?> </td>

            <td>Price TH :<?php
                            formatPrice(priceExludingVAT($products['produit_2']['Price'])); ?> </td>
            <td>Price TH :
                <?php
                formatPrice(priceExludingVAT($products['produit_3']['Price'])); ?> </td>
        </tr>
        <tr>
        <tr>
            <td>Discount : <?php
                            print_r($products['produit_1']['Discount']); ?></td>

            <td> Discount :<?php
                            print_r($products['produit_2']['Discount']);  ?> </td>
            <td>Discount :
                <?php
                print_r($products['produit_3']['Discount']);  ?> </td>

        </tr>
        <td> Discounted Price : <?php
                                formatPrice(displayDicountedPrice($products['produit_1']['Price'], $products['produit_1']['Discount'])); ?> </td>

        <td> Discounted Price :<?php
                                formatPrice(displayDicountedPrice($products['produit_2']['Price'], $products['produit_1']['Discount'])); ?> </td>
        <td>Discounted Price :
            <?php
            formatPrice(displayDicountedPrice($products['produit_3']['Price'], $products['produit_1']['Discount'])); ?> </td>
        </tr>

    </table>

    <h3> boucle Foreach </h3>

    <?php

    foreach ($products as $product => $caracteristiques) {

        echo ' Produit ' . ($product) . ' :<br>';
        foreach ($caracteristiques as $caracteristique => $details) {
            echo $caracteristique . ' : ' . $details . '<br>';
        }


        echo '<br><br>';
    }
    ?>
    <ul>
        <h3> boucle For </h3>

        <?php
        $keys = array_keys($products);
        for ($i = 0; $i < count($products); $i++) {

            echo "<img src=\"" . $products[$keys[$i]]["Picture"] . "\"alt=\"\" width=\"600\">";
            echo '<br><br>';
            echo $keys[$i] . "<br/>"; ?>
            <li> Name : <?php echo $products[$keys[$i]]["Name"] . "<br/>"; ?></li>
            <li>Model : <?php echo $products[$keys[$i]]["Model"] . "<br/>"; ?></li>
            <li>Price TTC : <?php formatPrice($products[$keys[$i]]["Price"]) . "<br/>"; ?></li>
            <li> Price TH : <?php formatPrice(priceExludingVAT($products[$keys[$i]]["Price"])) . "<br/>"; ?></li>
            <li> Discount : <?php echo $products[$keys[$i]]["Discount"] . "<br/>"; ?></li>
            <li>Price Discounted: <?php formatPrice(displayDicountedPrice($products[$keys[$i]]["Price"], $products[$keys[$i]]["Discount"])); ?></li>
    </ul>

<?php
            echo '<br><br>';
        }


?>
</ul>


<h5> boucle while </h5>

<?php
$index = 0;
$keys = array_keys($products);
while ($index < count($products)) {
    echo "<img src=\"" . $products[$keys[$index]]["Picture"] . "\"alt=\"\" width=\"600\">";
    echo '<br><br>';
    echo $keys[$index] . "<br/>";
?> <ul>
        <li>Name: <?php echo $products[$keys[$index]]["Name"]; ?></li>
        <li>Model: <?php echo $products[$keys[$index]]["Model"]; ?></li>
        <li>Price TTC: <?php formatPrice($products[$keys[$index]]["Price"]); ?></li>
        <li>Price TH: <?php formatPrice(priceExludingVAT($products[$keys[$index]]["Price"])); ?></li>
        <li> Discount: <?php echo $products[$keys[$index]]["Discount"]; ?> %</li>
        <li>Price Discounted: <?php formatPrice(displayDicountedPrice($products[$keys[$index]]["Price"], $products[$keys[$index]]["Discount"])); ?></li>
    </ul>
<?php $index++;
    echo '<br><br>';
} ?>


<h5> boucle do while </h5>

<?php
$index = 0;
do {
    echo "<img src=\"" . $products[$keys[$index]]["Picture"] . "\"alt=\"\" width=\"600\">";
    echo '<br><br>';
    echo $keys[$index] . "<br/>";

    echo $products[$keys[$index]]["Name"] . "<br/>";
    echo $products[$keys[$index]]["Model"] . "<br/>";
    formatPrice($products[$keys[$index]]["Price"]) . "<br/>";
    echo $products[$keys[$index]]["Discount"] . "<br/>";
    $index++;
    echo '<br><br>';
} while ($index < count($products));


?>
<h3> Etape 5 : favoriser son code avec des fonctions</h3>
<?php




?>
</body>
<footer> <?php
            include 'footer.php'; ?> ; </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>