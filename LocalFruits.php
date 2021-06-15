<?php


class LocalFruits extends Article

{
    private $localOrigin;
    private $region;


    public function __construct ($product,$localOrigin, $region)
    {
        parent::__construct($product);
        $this->localOrigin=$product["localOrigin"] = $localOrigin;
        $this->region=$product["region"] = $region;
    }

    public function getLocalOrigin (){
        return $this->localOrigin;
    }

    public function setRegion ($region){
        return $this->region = $region;
    }
    public function displayFruit()
    {
        // On appelle la méthode displayArticle() de la classe parente
        parent::displayArticle();
        echo "Pays origine  :". $this->localOrigin.'<br>';
        echo "Region origine :". $this->region.'<br>';


    }
}


