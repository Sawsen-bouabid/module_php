

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

?> 

<ul>
    <li>Price TTC: <?php formatPrice($product_1["Price"])?></li>
    <li>Price HT: <?php formatPrice(priceExludingVAT($product_1["Price"])) ;?></li>
    <li>Discount:<?php echo $product_1["Discount"]?></li>
    <li>Discounted Price:<?php formatPrice(displayDicountedPrice($product_1["Price"],$product_1["Discount"]));?></li> 
    
    
    </ul>
      </body>

</html>