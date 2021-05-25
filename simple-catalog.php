
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
<?php
include 'my-fonctions.php';?>


<h3> Création Tableau </h3>

<?php
$products = ["Helicopter H7524", "Avion_Luxe A5247", "Avion_Standard S6542"];
var_dump($products);?>


<?php
echo "<h2>Tri par ordre alphabétique</h2>";
sort($products);
var_dump($products);

echo "<p> Le premier produit  est :  $products[0] </br> </p>";
echo "<p>Le dernier produit  est :  $products[2]  </br> </p>";

?>


<h4> Affichage des produits avec la boucle While :</h4>

<?php

$i =0;

while ($i < count($products) ) {

    echo "Le produit : " . $products[$i] . "<br/>";
    $i ++;
}

?>


<h4> Affichage des produits avec la boucle Do While :</h4>


<?php
    $i = 0;
   
    do  {
        echo "Le produit : " . $products[$i] . "<br/>";

        $i++; 
     }
    while ($i<count($products));
?>




<h3> Affichage des produits avec la boucle For :</h3>

<?php 



for($i=0; $i<count($products); $i++) {


    echo " Le produit   : " . $products[$i] . "<br/>";
}

?>

<h3> Affichage des produits avec la boucle Foreach :</h3>

<?php 

foreach($products as $value) {
    echo "Le produit : " . $value . "<br/>";
}

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





