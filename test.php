<?php
include("my-functions.php");
$products = [
    [
        "mark" => "Nike",
        "price" => 40,
        "size" => 42,
        "discount" => 5,
        "picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5WqEi79uoaRwQOmnqciFWM96BO9knLWgSCQ&usqp=CAU",
    ],
    [
        "mark" => "Reebok",
        "price" => 60,
        "size" => 40,
        "discount" => NULL,
        "picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUL436SX-9SuYQvsOnlJoqtkE3UuWMEXk-Xg&usqp=CAU",
    ],
    [
        "mark" => "Asics",
        "price" => 30,
        "size" => 39,
        "discount" => 10,
        "picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjh0WVvLzOe8oRSkEyRCjeRURIRwp8c97R3A&usqp=CAU",
    ],
    [
        "mark" => "Adidas",
        "price" => 69,
        "size" => 43,
        "discount" => 5,
        "picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_K339Jwx5EO7PwdM4p6nEIcHrEIWOJXa5dw&usqp=CAU",
    ],
];
?>

<html lang="fr">

<body>

<table class="table">
    <thead>
    <tr>
        <th colspan="4">
            <h1> Notre catalogue </h1>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <h2>Marque</h2>
        </td>
        <td>
            <h2>Prix</h2>
        </td>
        <td>
            <h2>Pointure</h2>
        </td>
        <td>
            <h2>Remise</h2>
        </td>
        <td>
            <h2>Photo</h2>
        </td>
    </tr>
    <?php
    $index = 0;
    do {  // crée une ligne dans un tableau pour chaque index
        ?>
        <tr>
            <?php
            $tableau_index_bis = array_values($products[$index]);
            $tableau_bis_key = array_keys($products[$index]);
            $index_bis = 0;
            do { // crée autant de colonne que de key sur chaque ligne
                ?>
                <td>
                    <?php
                    if ($tableau_bis_key[$index_bis] == "picture") {     //pour afficher les photos
                        ?>
                        <img src="
                                         <?php
                        echo $tableau_index_bis[$index_bis];
                        ?>
                                         " alt="picture of shoes">
                        <?php
                        $index_bis++;
                        continue;
                    }
                    if ($tableau_bis_key[$index_bis] == "price") {           // j'affiche le prix en HT et en TTC
                        echo formatPrice($tableau_index_bis[$index_bis]) . " € TTC <br>" . priceExcludingVAT($tableau_index_bis[$index_bis]) . " € HT";
                        $index_bis++;
                        continue;
                    }
                    echo $tableau_index_bis[$index_bis];
                    $index_bis++;// remplis les colonnes de chaque ligne avec les infos du tableau associatif
                    ?>
                </td>
                <?php
            }
            while ( $index_bis < count($products[$index]));
            ?>
        </tr>
        <?php
        $index++;
    }
    while ( $index < count($products));
    ?>


    </tbody>
</table>

</body>



</html>