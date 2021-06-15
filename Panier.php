<?php

require_once __DIR__ . '\database.php';

require_once __DIR__ . '\Article.php';

class Panier
{
    private $pan = array();

    public function __construct()
    {
        foreach (Affiche_Produit() as $product) {

            $this->pan[$product["id"]] = $product["quantity"];
        }
    }

    public function getpanier()
    {
        return $this->pan;
    }


    public function add($id)
    {
        if (array_key_exists($id, $this->pan)) {
            $oldquantiy = $this->pan[$id];
            $this->pan[$id] = 1 + $oldquantiy;
        } else {
            array_push($id, 1);

        }
        echo "Add quantity =1 to  product with id :" . $id . '<br>';
    }

    public function Update($id, $quantity)
    {
        if (array_key_exists($id, $this->pan)) {
            $oldquantiy = $this->pan[$id];
            $this->pan[$id] = $quantity + $oldquantiy;
        }
        echo "the new quantity is" . $this->pan[$id] . " of the product  id :" . $id . '<br>';
    }


}