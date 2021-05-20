<html>
<header>

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

<h1> Etape 2 </h1>

   </body>

</html>