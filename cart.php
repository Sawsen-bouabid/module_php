<?php
include 'my-fonctions.php';
include 'produits.php';
//echo '$_POST';
//echo '<pre>';
//var_dump($_POST);
//echo '<pre>';

global $products;



$index = $products[$_POST['product']];
$name=$index["Name"];
$weight= $index["weight"];
$price=$index["price"];
$discount=$index["Discount"];

$quantity = $_POST["nbre_jours"];
$transporteur=$_POST["transporteur"];


$price_ttc =displayDicountedPrice($price,$discount);
$totalPriceTTC=totalCommande($price_ttc,$quantity);
$totalPriceHT = priceExludingVAT ($totalPriceTTC);
$TVA = $totalPriceTTC - $totalPriceHT;
$totalWeight= poidsTotal($weight,$quantity);

?>
<html>

<form>

<form width="1500" text-align="center">
    <tr>
        <td>Product</td>
        <td>Booking days</td>
        <td>Total Price TTC </td>
        <td>Total Price HT </td>
        <td>TVA </td>
        <td>Chipping </td>
        <td> Total weight </td>
        <td> Chipping Price</td>
        <td> Total with Chipping </td>
        <td></td>
    </tr>
    <tr>
        <td><?php echo $name;  ?></td>
        <td><?php echo $quantity?></td>
        <td><?php formatPrice($totalPriceTTC);  ?> </td>
        <td><?php formatPrice($totalPriceHT); ?> </td>
        <td><?php  formatPrice($TVA); ?> </td>
        <td><?php echo $totalWeight; ?> </td> </tr>

    <TR>
        <?php if ( isSet($_POST['envoyer']) )
            {?>
        <form method="post" action="cart.php">
        <TD>Chipping Options :</TD>
        <td><select type="text" name="transporteur">
                <option value="LaPoste">La Poste</option>
                <option value="MondialRelay">Mondial Relay</option>
                <option value="RapidPoste">Rapid Poste</option>

            </select>

    </TR>

    <TR>
        <TD>
        <td><input type="submit" class="btn btn-primary" id="envoyer" name="envoyer" value="Réserver"></td>


        </TD>
    </TR>
</form></select>
        <td>
            <?php
            if($transporteur=="LaPoste"){
                if ($totalWeight!= 0 && $totalWeight<500){

                    $ChippingPrice=20;}
                elseif  ($totalWeight>=500 &&$totalWeight<2000 ){

                    $ChippingPrice=($totalPriceTTC*10)/100; }

            else {$ChippingPrice=0; }


                }
            elseif
            ($transporteur=="MondialRelay"){
                if ($totalWeight!=0 && $totalWeight<500){

                    $ChippingPrice=20;}
                elseif  ($totalWeight>=500 &&$totalWeight<2000 ){

                    $ChippingPrice=($totalPriceTTC*10)/100; }

                else {$ChippingPrice=0; }



            }
            else  {

                if ($totalWeight!=0 && $totalWeight<500){

                    $ChippingPrice=20;}
                elseif  ($totalWeight>=500 &&$totalWeight<2000 ){

                    $ChippingPrice=($totalPriceTTC*10)/100; }

                else {$ChippingPrice=0; }




            }
            echo (int) $ChippingPrice;

            ?></td>
        <td>   <?php


                echo formatPrice($prixFinal= $ChippingPrice+$totalPriceTTC);

            ?></td>
    </tr>
    <?php }?>




</table>

</form>

</body>
<a href="multidimensional-catalog.php">&laquo; Retour au formulaire</a>

