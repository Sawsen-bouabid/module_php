<?php


require_once __DIR__.'\database.php';

require_once __DIR__.'\Article.php';
require_once __DIR__.'\LocalFruits.php';




class Catalogue
{
    public  $display_array= array();



    public function __construct() {
        foreach (Affiche_Produit() as $product) {
            if($product["localOrigin"] != "" and $product["region"]!= ""){

                $Product_array = new LocalFruits ($product,$product["localOrigin"],$product["region"]);
                array_push($this->display_array,$Product_array);
            } else {

                $Product_array = new Article($product);
                array_push($this->display_array,$Product_array);

            }

        }
    }

    public function displayAll()
    {
        foreach ( $this->display_array as  $product) {

            //  L'opérateur instanceof permet de vérifier si tel objet est une instance de telle classe
            if($product instanceof LocalFruits){
                $product->displayFruit();
            } else {
                $product->displayArticle();
            }

?>
            <form method="post" action="Affiche_panier.php">


                <h5>Choisir Quantité :</h5>
                <input  name="quantity" value="quantity" type="number" min="0"><br>
                <input  name="id" value="<?php echo $product->id ?>" type="hidden" ><br>


                <input type="submit" class="btn btn-primary" value="Ajouter au Panier" > </input>


</form>
<?php
        }
    }



}

