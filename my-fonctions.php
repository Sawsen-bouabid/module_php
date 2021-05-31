<?php

function formatPrice($price_centime) {
    $price_format= $price_centime/100;
    echo $price_format . '<br />';

}

function priceExludingVAT(int $price){

    return (100*$price)/(100+20);
}


function displayDicountedPrice(int $price,int $discount){
    return  $price-($price/100 *$discount);}

function poidsTotal($poids, $quantite){
    return $poids*$quantite;
}

function totalCommande(int $prix,int $quantite){
    return $prix*$quantite;
}


