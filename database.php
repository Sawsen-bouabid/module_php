
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=boutique_base;charset=utf8', 'sawsen', '$ousouta88');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
