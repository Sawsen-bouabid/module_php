<?php

require_once __DIR__.'\database.php';
require_once __DIR__.'\Catalogue.php';
require_once __DIR__.'\Article.php';
require_once __DIR__.'\Affiche_panier.php';
require_once __DIR__.'\Panier.php';


if (!is_numeric($_POST['quantity'])  ) {
    header('Location :http://localhost/module_php/Redirection.php ',TRUE,307);
    exit();
}




$Affiche_panier = new Panier ();

$Affiche_panier -> add($_POST['id']);


$Affiche_panier->Update ($_POST['id'],$_POST['quantity']);


echo 'ID :'.$_POST['id'].'<br>';

echo  'Quantity :'.$_POST['quantity'].'<br>';



?>
    <form method="post" action="Affiche_panier.php">

        <input type="hidden" name="Add" class="btn btn-primary" value="<?php $Affiche_panier ->add($_POST['id']);?>"  >
        <input type="submit" class="btn btn-primary" value="Add" >

        <input type="hidden" name="Update" value="<?php  $Affiche_panier ->Update($_POST['id'],$_POST['quantity']);?>" >

        <input type="submit" class="btn btn-primary" value="Update" >


    </form>
<p><a href="Affiche-catalogue.php">&laquo; Return to products catalogue</a></p>