<?php

$products = [
    [
    "name" => "La Biquette",
    "type" => "Bière blanche",
    "degree" => "4.5° ALC. VOL.",
    "bitterness" => "10 EBC – 15 IBU",
    "sizes" => ["Bouteille 33 cL", "Bouteille 75 cL", "PerfecDraft (6L)"],
    "prices" => ["250", "700", "3500"],
    "discount" => "5",
    "picture" => "pictures/beer_biquette.png",
    ],
    [
    "name" => "La Lion",
    "type" => "Bière blonde",
    "degree" => "5.5° ALC. VOL.",
    "bitterness" => "15 EBC – 20 IBU",
    "sizes" => ["Bouteille 33 cL", "Bouteille 75 cL", "PerfecDraft (6L)"],
    "prices" => ["300", "800", "3750"],
    "discount" => "10",
    "picture" => "pictures/beer_lion.png",
    ],
    [
    "name" => "La Rakoon",
    "type" => "Bière IPA",
    "degree" => "6.5° ALC. VOL.",
    "bitterness" => "20 EBC – 40 IBU", 
    "sizes" => ["Bouteille 33 cL", "Bouteille 75 cL", "PerfecDraft (6L)"],
    "prices" => ["350", "900", "4000"],
    "discount" => "15",
    "picture" => "pictures/beer_rakoon.png",
    ],
    [
    "name" => "La Grizzly",
    "type" => "Bière brune",
    "degree" => "8.5° ALC. VOL.",
    "bitterness" => "40 EBC – 80 IBU",
    "sizes" => ["Bouteille 33 cL", "Bouteille 75 cL", "PerfecDraft (6L)"],
    "prices" => ["500", "1200", "5000"],
    "discount" => "25",
    "picture" => "pictures/beer_grizzly.png",
    ],
];
$keys = array_keys($products);
$values = array_values($products);
include 'my-functions.php';
?>
<html>
<h1>Multidimensional catalog</h1>
<ul>
    <table>
        <?php foreach ($values as $value){
        ?>
        <td width="300">
            <?php echo $value["name"] . "<br>"."<br>";
            ?>
            <img src='<?php echo $value["picture"] ?>'
                 alt="picture" 
                 width="200">
            <?php echo "<br>"."<br>";?>
            <li>
                <?php echo 'Type: ' . $value["type"] . "<br>" ;
                ?>
            </li>
            <li>
                <?php echo 'Degree: ' . $value["degree"] . "<br>" ;
                ?>
            </li>
            <li>
                <?php echo 'Bitterness: ' . $value["bitterness"] . "<br>" . "<br>";
                ?>
            </li>
            <li>
                <?php   foreach ($value["sizes"] as $sizes){
                        echo 'Sizes: '. $sizes .'<br>';
                        }
                    echo '<br>';
                ?>
            </li> 
            <li>
                <?php   foreach ($value["prices"] as $prices){
                        echo 'Price TTC (euros): ';
                        formatPrice($prices);
                        echo '<br>'.'Price HT (euros): ';
                        formatPrice(priceExcludingVAT($prices));
                        echo '<br>';
                        echo 'Discount: ' . $value["discount"] . "<br>" . 'Price after discount (euros): '; 
                        formatPrice(displayDiscountedPrice($prices, $value["discount"]));
                        echo '<br>'.'<br>';
                }
                ?>
            </li> 
            <div class="col ">
                <form method="post" action="cart.php">
                    <div class="form-group">
                        <label for="form-select">Product</label>
                            <select name="beer" class="form-control" id="formulaireSelect1">
                                <option value='<?php foreach ($value["sizes"] as $sizes)
                                ?>'Product
                                <?php echo $sizes
                                ?>
                                </option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="form-select">Quantity</label>
                            <select name="quantity" class="form-control" id="formulaireSelect1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="form-input">Total</label>
                            <input
                                type="text"
                                name="total"
                                value=""
                                class="form-control"
                                id="form-input"
                                />
                    </div>
                    <button id="bouton" type="submit" class="btn btn-warning mb-2">Commander</button>
                </form>
            </div>
        <?php 
        ?>  
        </td>
    </table>
</ul>
© 2021 GitHub, Inc.
