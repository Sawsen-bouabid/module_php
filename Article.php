<?php


class Article
{
    public string $name;
    public string $description;
    public int $price;
    public int $weight;
    public string $picture;
    public int $quantity;
    public string $available;
    public string $categorie_id;


    public function __construct($name, $description, $price, $weight, $picture, $quantity, $available, $categorie_id) {

        $this->name=$name;
        $this->description=$description;
        $this->price=$price;
        $this->weight=$weight;
        $this->picture=$picture;
        $this->quantity=$quantity;
        $this->available=$available;
        $this->categorie_id=$categorie_id;
    }

    public function displayArticle()
    {
        echo "Nom :". $this->name.'<br>';
        echo "Description :". $this->description.'<br>';
        echo "Prix :". $this->price.'<br>';
        echo "Image :". $this->weight.'<br>';
        echo "Photo :". $this->picture.'<br>';
        echo "Quantity :". $this->quantity.'<br>';
        echo "Available :". $this->available.'<br>';
        echo "Categorie_id :". $this->categorie_id.'<br>';
    }


}