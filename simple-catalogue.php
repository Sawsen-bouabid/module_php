
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta
            name="description"
            content="Le meilleur service de location d'avions privés en France. Confort, sécurité et commodité."
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS only -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
            crossorigin="anonymous"
    />

    <!--<link href="css\style.css" rel="stylesheet" /> -->
    <title>Location d'Avion Privé</title>
    <link href="css\style.css" rel="stylesheet" />
    <title>Location location d'Avion Privé</title>
</head>

<header>
    <?php
    include 'header.php';?>
</header>



<body>
<h1> Tableau Produits</h1>


<?php
$products = ["Helicopter H7524", "Avion_Luxe A5247", "Avion_Standard S6542"];
print_r($products);
$first_odd_number = $products[0];
$last_odd_number = $products[2];


?>

<?php
echo "<h2>Tri par ordre alphabétique</h2>";
sort($products);
print_r($products);

echo "<h3>The first odd number is :  $first_odd_number</h3>";
echo "<h3>The last odd number is : $last_odd_number </h3>";

?>

</body>
<footer> <?php
    include 'footer.php';?> ; </footer>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"
></script>
</html>





