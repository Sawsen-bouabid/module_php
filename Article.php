<?php


class Article
{   public  $id;
    protected $name;
    public  $description;
    public  $price;
    public  $weight;
    public  $picture;
    public $quantity;
    public $available;
    public  $categorie_id;


    public function __construct($product)
    {
        $this->id = $product["id"];
        $this->name = $product["name"];
        $this->description = $product["description"];
        $this->price = $product["price"];
        $this->weight = $product["weight"];
        $this->picture = $product["picture"];
        $this->quantity = $product["quantity"];
        $this->available = $product["available"];
        $this->categorie_id = $product["categorie_id"];
    }


    public function displayArticle()
    { ?>
        <table class="table" textalign="center">

            <tr>
                <h4> <?php echo "Nom :" . $this->name . '<br>'; ?> </h4>
                <?php echo "Description :" . $this->description . '<br>';
                echo "Prix :" . $this->price . '<br>';
                echo "Weight :" . $this->weight . '<br>';
                echo "<img src=\"" . $this->picture . "\"alt=\"\" width=\"300\">" . '<br>';
                echo "Quantité disponible :" . $this->quantity . '<br>';
                echo "Available :" . $this->available . '<br>';
                echo "Categorie_id :" . $this->categorie_id . '<br>';
                echo '<br>' . '<br>'; ?>
            </tr>

        </table>
    <?php }
}
?>