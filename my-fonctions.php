<?php

function formatPrice($price_centime) {
     $price_format= $price_centime/100;
    echo $price_format . 'euro'. '<br />';

}

function priceExludingVAT($price){

    return (100*$price)/(100+20);
}


function displayDicountedPrice($price,$discount){
    return $price-($price/100 *$discount);}
