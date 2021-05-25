

<html>
<header>

</header>
<body>
<?php
include  'my-fonctions.php';?>

<h1> Tableau Produits</h1>

<?php
$product_1 = [
    "Name" => "Helicopter ",
    "Model" => "H7524 ",
    "Price" => "50000",
    "Discount" => "20%",
    "Picture" => "hélécopter1.jpg",
];

var_dump($product_1);
echo '<br><br>';

formatPrice($product_1["Price"]);


?>


   </body>

</html>