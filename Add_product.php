
<?php
include __DIR__.'\database.php'; ?>

   <form method="post" action="Product_id.php">


<h4>Ajout nouveau produit :</h4>

    <label for="form-select"></label>
    <h5>Name :</h5>
    <input  name="name" value="name" type="text" > <br>
   <h5>Description :</h5>
   <input  name="description" value="description" type="text" > <br>
      <h5>Price :</h5>
    <input  name="price" value="price" type="number" min="0"> <br>

      <h5>Weight :</h5>
  <input  name="weight" value="weight" type="number" min="0"><br>
        <h5>picture :</h5>
    <input  name="picture" value="url" type="url" ><br>

    <h5>Quantity :</h5>
     <input  name="quantity" value="quantity" type="number" min="0"><br>
      <h5>Available :</h5>

                <select type="text" name="available" value="available">
                    <option value=1 >yes</option>
                    <option value=0 >no</option>

                </select>

                <h5>Categorie :</h5>



                    <select name="categorie_id" value="categorie_id" id="">
                        <option value=""><?php list_categories();?></option>
                        <?php foreach (list_categories() as $categorie){
                            ?>
                            <option value="<?php echo $categorie['id'] ; ?>">
                                <?php echo $categorie['name'] . "<br>"; ?>
                            </option>
                            <?php
                        }?>
                    </select>


       <button type="submit" class="btn btn-primary" id="button" name="envoyer" >Ajouter Produit</button>


</form>



