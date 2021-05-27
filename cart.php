<?php
include 'my-functions.php'
?>
<html>
    <p><a href="multidimensional-catalog.php">&laquo; Retour au formulaire</a></p>
    <table>
        <tr>
            <td>Product_type</td>
            <td>Numer_of_days</td>
            <td>Total</td>
        </tr>
        <tr>
            <td><?php echo $_POST['Product_type']?></td>
            <td><?php echo $_POST['Numer_of_days']?></td>
            <td><?php echo $_POST['Total']?></td>
        </tr>
    </table>
</html>