<?php

function formatPrice($price_centime) {
    return $price_format= $price_centime/100;
    echo 'Le prix en euro est ' . $price_format . ' !<br />';


}