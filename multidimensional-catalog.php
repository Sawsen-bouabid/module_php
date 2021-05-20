<?php
$products = [
    "product_1" => [
        "Name" => "Helicopter ",
        "Model" => "H7524 Rouge",
        "Price" => "500$/day",
        "Discount" => "20%",
        "Picture" => "https://th.bing.com/th/id/OIP.lU5_uQumNiu5th9kSVIaRwHaE8?pid=ImgDet&rs=1",
    ],
    "product_2" => [
        "Name" => "Avion_luxe ",
        "Model" => "A5247 Or",
        "Price" => "1200$/day",
        "Discount" => "20%",
        "Picture" => "https://i.pinimg.com/originals/8d/56/71/8d56715bfb19e9c07ee0cd25ebc5aa36.jpg",
    ],



    "product_3" => [
        "Name" => "Avion_Standard ",
        "Model" => "S6542 Blanc",
        "Price" => "1000$/day",
        "Discount" => "20%",
        "Picture" => "https://th.bing.com/th/id/Re9cf8e1b8f6aa0174cc00c0a37c10afb?rik=mybImVADQBWIQQ&pid=ImgRaw",
    ],

]; ?>
<table>
    <tr>
        <td> <?php
            echo "<img src=\"".$products['product_1']['Picture']."\"alt=\"\" width=\"600\">";
            ?></td>

        <td> <?php
            echo "<img src=\"".$products['product_2']['Picture']."\"alt=\"\" width=\"600\">";
            ?></td>
        <td> <?php
            echo "<img src=\"".$products['product_3']['Picture']."\"alt=\"\" width=\"600\">";
            ?></td>


    </tr>
          <tr>
            <td> <?php
                print_r($products['product_1']['Name']);  ?></td>

            <td> <?php
                print_r($products['product_2']['Name']);  ?> </td>
            <td>
                <?php
                print_r($products['product_3']['Name']);  ?> </td>

          </tr>
      </table>

