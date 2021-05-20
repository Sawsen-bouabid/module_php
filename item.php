
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta
            name="description"
            content="Le meilleur service de location d'avions privés en France. Confort, sécurité et commodité."
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS only -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
            crossorigin="anonymous"
    />

    <!--<link href="css\style.css" rel="stylesheet" /> -->
    <title>Location d'Avion Privé</title>
    <link href="css\style.css" rel="stylesheet" />
    <title>Location location d'Avion Privé</title>
</head>

<header>
    <?php
  include  'header.php';?>
</header>
<body>
<h1>Location Helicopter</h1>

<?php
 $Article = "Helicopter H7524 Rouge";
 $Price = "500 $ / jour";
 $image = "https://th.bing.com/th/id/OIP.lU5_uQumNiu5th9kSVIaRwHaE8?pid=ImgDet&rs=1";

echo "<img src=\"".$image."\" alt=\"\" width=\"600\">";

echo "<h2> $Article </h2>";
echo "<h2>Le prix est : $Price</h2>";
  ?>

</body>
<footer> <?php
    include 'footer.php';?> ; </footer>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"
></script>

</html>

