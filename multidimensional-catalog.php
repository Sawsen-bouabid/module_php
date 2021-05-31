<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Le meilleur service de location d'avions privés en France. Confort, sécurité et commodité." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!--<link href="css\style.css" rel="stylesheet" /> -->
    <title>Location d'Avion Privé</title>
    <!--<link href="css\style.css" rel="stylesheet" /> -->
    <title>Location location d'Avion Privé</title>
</head>

<header>
    <?php
    include  'header.php'; ?>
</header>



;

<body>
<?php
include  'my-fonctions.php';
include 'produits.php';?>
<h2> Catalogue Produits</h2>


<table>


    <?php    foreach($products as $keys => $product) {
        ?>

        <td width="600">


            <?php
            echo "<img src=\"" . $product["picture"] . "\"alt=\"\" width=\"400\">";
            ?>

            <?php echo "<br>";?>



            <form method="post" action="cart.php">
                <TABLE >
                    <select name="product" id="">

                            <option value="<?php echo $keys; ?>"><?php echo $product['Name']; ?></option>


                    </select>

                        <TD>Booking days :</TD>
                        <TD>
                            <label for="form-select"></label>
                            <input  name="nbre_jours" type="number" >


                        </TD>

                    </TR>

                    <input  name="transporteur" value="undefined" >

                    <TR>
                        <TD>
                        <td><input type="submit" class="btn btn-primary" id="envoyer" name="envoyer" value="Réserver"></td>
                        </TD>
                    </TR>
                </TABLE>
            </FORM>




        </td>






        </form>
        </td>


    <?php } ?>





</table>






</body>
<footer> <?php
            include 'footer.php'; ?> ; </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>