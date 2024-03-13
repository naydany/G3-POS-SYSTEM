<?php
function order(): array
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO orders_detail (pro_name, pro_price, pro_qty, tatal_price, order_status, order_date)
    SELECT pro_name, pro_price, pro_quantity, pay_totalprice, method_status, pay_date  FROM payments;");
    $statement->execute();
    return $statement->fetchAll();
}

function getOrdersDetail(): array
{
    global $connection;
    $statement = $connection->prepare("select * from orders_detail");
    $statement->execute();
    return $statement->fetchAll();
}

function addOrder($name,$price,$quantity,$resultWithSymbol): bool
{
    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');
     
    global $connection;
    $statement = $connection->prepare("insert into orders_detail(pro_name, pro_price, pro_qty, tatal_price, order_date) 
    values (:pro_name, :pro_price, :pro_qty, :tatal_price, :order_date)");
    $statement->execute([
        ':pro_name' => $name,
        ':pro_price' => $price,
        ':pro_qty' => $quantity,
        ':tatal_price' => $resultWithSymbol,
        ':order_date' => $time
    ]);
    return $statement->rowCount() > 0;
}

function updateOrder(string $paid ,string $date): bool
{
    echo $paid ;
    echo $date ;
    global $connection;
    $statement = $connection->prepare("update orders_detail set order_status = :order_status where order_date = :order_date");
    $statement->execute([
        ':order_status' => $paid,
        ':order_date' => $date
    ]);
    return $statement->rowCount() > 0;
}