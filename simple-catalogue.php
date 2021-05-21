
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

<h3> Création Tableau </h3>

<?php
$products = ["Helicopter H7524", "Avion_Luxe A5247", "Avion_Standard S6542"];
var_dump($products);?>
<h3>  Affichage éléments (boucles) </h3>


<?php
for($products as $name) {
    echo "<p>le nom du produit: $name <br> </p>";

}
?>

<?php
echo "<h2>Tri par ordre alphabétique</h2>";
sort($products);
print_r($products);

echo "<p> Le premier produit  est :  $products[0] </br> </p>";
echo "<p>Le dernier produit  est :  $products[2]  </br> </p>";

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





