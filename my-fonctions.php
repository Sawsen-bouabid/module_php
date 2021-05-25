<?php

function formatPrice($price_centime) {
     $price_format= $price_centime/100;
    echo' Prix en euro : ' . $price_format . '<br />';

}