
<?php

    $bdd= new PDO('mysql:host=localhost;port=3307;dbname=boutique_base;charset=utf8', 'sawsen', '$ousouta88');

function queries($queryToExecute) {
    global $bdd;
    $query = $bdd->query($queryToExecute);

    return $query->fetchAll(PDO::FETCH_ASSOC);

}



function Affiche_Produit () {

    $query = "SELECT * FROM `products`";

    return queries($query);

}

    function Product_list ()
    {

        $query_1 = "SELECT `products`.`name`FROM `products`";

        return queries($query_1);

    }

function list_categories ()
{

    $query_12 = "SELECT * FROM `categories`";

    return queries($query_12);

}

function list_customers ()
{

    $query_clients = "SELECT `customers`.`first_name`, `customers`.`last_name` FROM `customers`";

    return queries($query_clients);

}


function ProductQuantityNULL ()
{

    $query_2 ="SELECT `products`.`name`, `products`.`quantity`FROM `products`WHERE `products`.`quantity` ='0'";

    return queries($query_2 );


}

function OrderID1 ()
{

    $query_5 ="SELECT products.name, order_product.quantity, products.price 
FROM products
INNER JOIN order_product on products.id = order_product.product_id
WHERE order_product.order_id = 1";

    return queries($query_5 );


}


function order_list_by_custmors_name_charlize ()
{

    $query_9 ="SELECT orders.number, 
 SUM(products.price * order_product.quantity) AS total_price,
 customers.first_name
FROM orders
INNER JOIN order_product on orders.id = order_product.order_id
INNER JOIN products on  products.id =order_product.product_id
INNER JOIN customers on  customers.id =orders.customer_id

WHERE customers.first_name = 'Charlize' 
GROUP BY  orders.number ";

    return queries($query_9 );


}



function insert_new_product ($name, $description, $price, $weight, $picture, $quantity, $available, $categorie_id)
{
global $bdd;

    $req = $bdd->prepare('INSERT INTO products (name, description, price, weight, picture, quantity, available, categorie_id)  
VALUES(:name, :description, :price, :weight, :picture, :quantity,:available,:categorie_id)');
    $req->execute(array(
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'weight' => $weight,
        'picture' => $picture,
        'quantity' => $quantity,
        'available' => $available,
        'categorie_id' => $categorie_id

    ));
echo "le produit est ".$name.' '."est bien ajouté".'<br>';



}


function update_product ( $newprice, $newquantity, $product_name)
{
    global $bdd;

    $req = $bdd->prepare('UPDATE products SET price = :newprice, quantity = :newquantity WHERE name = :product_name ');
    $req->execute(array(
        'newprice' => $newprice,
        'newquantity' => $newquantity,
        'product_name' => $product_name

    ));echo "le produit est ".$product_name.' '."est bien mise à jour".'<br>';
}

?>




