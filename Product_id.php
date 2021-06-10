

<?php
include __DIR__.'\database.php';
?>


<?php

 if (!is_numeric($_POST['price']) or !is_numeric($_POST['quantity']) or !is_numeric($_POST['weight']) ) {
     header('Location :http://localhost/module_php/Product_id.php ');
     exit();
 }
     insert_new_product ($_POST['name'], $_POST['description'], $_POST['price'], $_POST['weight'], $_POST['picture'], $_POST['quantity'], $_POST['available'], $_POST['categorie_id']);



     echo 'Name :'.$_POST['name'].'<br>';

     echo  'Description :'.$_POST['description'].'<br>';

     echo  'Price :'.$_POST['price'].'<br>';
     echo  'Weight :'.$_POST['weight'].'<br>';
     echo  'Picture :'.$_POST['picture'].'<br>';
     echo  'Quantity :'.$_POST['quantity'].'<br>';
     echo  'Available :'.$_POST['available'].'<br>';
     echo  'Categery:'.$_POST['categorie_id'].'<br>';







