
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=boutique_base;charset=utf8', 'sawsen', '$ousouta88');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


// affichage produit :

$query_1 = $bdd->query('SELECT `products`.`name`FROM `products`;
');


while ($donnees = $query_1->fetch())
{
    echo $donnees['name'] . '<br />';
}

$query_1->closeCursor();



// Ajout d'une condition

$query_2 = $bdd->query("SELECT `products`.`name`, `products`.`quantity`FROM `products`WHERE `products`.`quantity` = '0';");

while ($donnees = $query_2->fetch())
{
echo $donnees['name'] . ' quantity is ' . $donnees['quantity'] . '<br>';
}

$query_2->closeCursor();

?>
