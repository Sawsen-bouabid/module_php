
<?php

    $bdd= new PDO('mysql:host=localhost;port=3307;dbname=boutique_base;charset=utf8', 'sawsen', '$ousouta88');

function queries($queryToExecute) {
    global $bdd;
    $query = $bdd->query($queryToExecute);

    return $query->fetchAll(PDO::FETCH_ASSOC);

}





    function Product_list ()
    {

        $query_1 = "SELECT `products`.`name`FROM `products`";

        return queries($query_1);

    }





function ProductQuantityNULL ()
{

    $query_3 ="SELECT `products`.`name`, `products`.`quantity`FROM `products`WHERE `products`.`quantity` ='0'";

    return queries($query_3 );


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




?>




