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
    "produit_1" => [
        "Name" => "Helicopter ",
        "Model" => "H7524 Rouge",
        "Price" => "500$/day",
        "Discount" => "Discount 20%",
        "Picture" => "hélécopter1.jpg",
    ],
    "produit_2" => [
        "Name" => "Avion_luxe ",
        "Model" => "A5247 Or",
        "Price" => "1200$/day",
        "Discount" => "Discount 20%",
        "Picture" => "Avion_de_luxe_2.jpg",
    ],


    "produit_3" => [
        "Name" => "Avion_Standard ",
        "Model" => "S6542 Blanc",
        "Price" => "1000$/day",
        "Discount" => "Discount 20%",
        "Picture" => "Avion-standard_4.jpg",
    ],

]; ?>
<table>
    <tr>
        <td> <?php
            echo "<img src=\"" . $products['produit_1']['Picture'] . "\"alt=\"\" width=\"400\">";
            ?></td>

        <td> <?php
            echo "<img src=\"" . $products['produit_2']['Picture'] . "\"alt=\"\" width=\"400\">";
            ?></td>
        <td> <?php
            echo "<img src=\"" . $products['produit_3']['Picture'] . "\"alt=\"\" width=\"400\">";
            ?></td>

    </tr>
    <tr>
        <td> <?php
            print_r($products['produit_1']['Name']); ?></td>

        <td> <?php
            print_r($products['produit_2']['Name']); ?> </td>
        <td>
            <?php
            print_r($products['produit_3']['Name']); ?> </td>

    </tr>
    <tr>
        <td> <?php
            print_r($products['produit_1']['Model']); ?></td>

        <td> <?php
            print_r($products['produit_2']['Model']); ?> </td>
        <td>
            <?php
            print_r($products['produit_3']['Model']); ?> </td>

    </tr>
    <tr>
        <td> <?php
            print_r($products['produit_1']['Price']); ?></td>

        <td> <?php
            print_r($products['produit_2']['Price']); ?> </td>
        <td>
            <?php
            print_r($products['produit_3']['Price']); ?> </td>

    </tr>
    <tr>
        <td> <?php
            print_r($products['produit_1']['Discount']); ?></td>

        <td> <?php
            print_r($products['produit_2']['Discount']); ?> </td>
        <td>
            <?php
            print_r($products['produit_3']['Discount']); ?> </td>

    </tr>
</table>

<h3> boucle Foreach </h3>
        <li> <?php
        
foreach ($products as $product => $caracteristiques){
    echo ' Produit ' .($product ). ' :<br>';  
      
         foreach($caracteristiques as $caracteristique => $details ){
       
       echo $caracteristique. ' : ' .$details. '<br>';
    
         }
   
       echo '<br><br>';

   
   }
   ?></li>
<h3> boucle For </h3>

<?php
$keys=array_keys($products);
for($i=0; $i<count($products);$i++){
    echo $keys[$i]. "<br/>";
    foreach($products[$keys[$i]] as $key => $value){
        echo $key .":" . $value."<br/>";
    }     echo '<br><br>';

}
?>
<h3> boucle while </h3>
<?php
$i=0;
while($i < count($products))
{

    echo $keys[$i]. "<br/>";
    foreach($products[$keys[$i]] as $key => $value){
        echo $key .":" . $value."<br/>";
    } $i++;
    echo '<br><br>';

}

?>

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














