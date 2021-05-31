
 </table>
    <tr>
        <th scope="row"><?php echo $_POST["nom_produit"];?></th>
<th><?php formatPrice(displayDicountedPrice($_POST["prix_produit"],$_POST["discount_produit"]));?></th>
<th><?php echo $_POST["quantite"];?></th>
<th><?php formatPrice(totalCommande(displayDicountedPrice($_POST["prix_produit"],$_POST["discount_produit"]),$_POST["quantite"]));?></th>
</tr>
<tr>
    <th scope="row"></th>
    <th></th>
    <th>TOTAL HT</th>
    <th><?php formatPrice(priceExludingVAT(totalCommande(displayDicountedPrice($_POST["prix_produit"],$_POST["discount_produit"]),$_POST["quantite"])));?></th>
</tr>
<tr>
    <th scope="row"></th>
    <th></th>
    <th>TVA</th>
    <th>20%</th>
</tr>
<tr><th><p>CHOIX DU TRANSPORTEUR</p></th>
    <th><select name="choix_transporteur">
            <option value="ups">UPS</option>
            <option value="chronoposte">Chronoposte</option>
        </select>
    </th>
    <th><button type="submit" class="btn btn-dark btn-outline-light">VALIDER</button></th>
</tr>

<tr>
    <th scope="row"></th>
    <th></th>
    <th>FRAIS DE PORT</th>
    <th></th>
</tr>

<tr>
    <th scope="row"></th>
    <th></th>
    <th>TOTAL TTC</th>
    <th><?php formatPrice(totalCommande(displayDicountedPrice($_POST["prix_produit"],$_POST["discount_produit"]),$_POST["quantite"]));?></th>
</tr>








 <div class="col ">
     <form method="post" action="cart.php">
         <div class="form-group">
             <label for="form-select">Product</label>
             <select name="beer" class="form-control" id="formulaireSelect1">
                 <option value='<?php foreach ($value["sizes"] as $sizes){
                 ?>'Product
                 <?php echo $sizes
                                }?>
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






























