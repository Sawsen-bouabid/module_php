<?php

require_once __DIR__.'\database.php';

require_once __DIR__.'\Article.php';

class Catalogue
{
    public array $articleArray= array();



    public function __construct() {
       foreach (Affiche_Produit() as $product) {

           $article = new Article( $product["name"],$product["description"],$product["price"],$product["weight"],$product["picture"],$product["quantity"],$product["available"],$product["categorie_id"] );

          array_push($this->articleArray,$article);

       }

    }



    public function displayAllArticle()
    {
        foreach ( $this->articleArray as  $Catalogue) {

            $Catalogue->displayArticle() ;
    }
    }

}