<?php
include  'database.php'; ?>


<h3> Liste produit</h3>

<?php
 Foreach (Product_list () as $product){

  echo $product['name'].'<br />';
 }
?>

<h3>  Liste des produits en rupture de stock </h3>

<?php
Foreach (ProductQuantityNULL () as $product){

 echo $product['name'].' '. "quantity is ".$product['quantity'].'<br />';
}

?>


 <h3> Liste des produits (nom du produit, quantité et prix unitaire) de la commande portant l'id 1</h3>

<?php

Foreach (OrderID1 () as $order){

 echo 'Name: '.$order['name'].'<br>'.'Price : '.$order['price'].'<br>'.'Quantity : ' .$order['quantity'].'<br>'.'<br>';
}

?>

<h3>Liste des commandes (Numéro + Prix total de la commande) du client “Charlize”</h3>

<?php

echo 'Charlize order: '.'<br>'.'<br>';
Foreach (order_list_by_custmors_name_charlize ()as $order){


    echo 'Order number : '.$order['number'].'<br>'.'Total Price : ' .$order['total_price'].'<br>'.'<br>';
}

?>

    <h3>Insertion d'un produit</h3>

<?php // insert_new_product ('Cerise blanc', '', 3000, 1200, '', 100, '', 3);

Foreach (Product_list () as $product){

    echo $product['name'].'<br />';


}

?>

<h3>Mise à jour d'un produit</h3>


<?php update_product (  Cerise,500,60);



