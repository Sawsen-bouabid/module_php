

<?php
require_once __DIR__.'\database.php';
require_once __DIR__.'\Catalogue.php';
require_once __DIR__.'\Article.php';
require_once __DIR__.'\LocalFruits.php';

require_once __DIR__.'\Panier.php';



$Catalogue=new Catalogue();

$Catalogue->displayAll();



