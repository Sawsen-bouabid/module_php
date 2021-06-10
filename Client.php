<?php


class Client
{
    public string $first_name;
    public string  $last_name;

    public function __construct($first_name, $last_name){
        $this->first_name=$first_name;
        $this->last_name=$last_name;
    }

    public function displayClient(){
        echo "Nom : " . $this->last_name . '<br>';

        echo "Prénom: " . $this->first_name . '<br>';
        echo '<br>'.'<br>';

    }
}