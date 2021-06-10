

<?php
require_once __DIR__.'\database.php';

require_once "Catalogue.php";
require_once "Article.php";

$Banane= new Article('Cerise blanc', 'sweet bananas', 3000, 1200, 'https://static.passeportsante.net/200x200/i101971-banane-nu.jpg', 100, '', 3);

$Banane->displayArticle();

$Catalogue=new Catalogue();

$Catalogue->displayAllArticle();

