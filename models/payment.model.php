<?php
function createPayment( string $code,string $totalprice, string $name, string $pro_price, int $pro_quantity) : bool
{
    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("insert into payments (pay_code,pay_totalprice,pay_date,pro_name, pro_price, pro_quantity)
    values (:pay_code,:pay_totalprice,:pay_date,:pro_name, :pro_price, :pro_quantity)");
    $statement->execute([
        ':pay_code' => $code,
        ':pay_totalprice' => $totalprice,
        ':pay_date' => $time,
        ':pro_name' => $name,
        ':pro_price' => $pro_price,
        ':pro_quantity' => $pro_quantity,
    ]);
    return $statement->rowCount() > 0;
}

function getPayments(): array
{
    global $connection;
    $statement = $connection->prepare("select * from payments");
    $statement->execute();
    return $statement->fetchAll();
}

function cancelPayment(int $id) : bool

{
    global $connection;
    $statement = $connection->prepare("delete from payments where pay_id = :pay_id");
    $statement->execute([':pay_id' => $id]);
    return $statement->rowCount() > 0;
}

function deleteOldPayment(int $id) : bool

{
    global $connection;
    $statement = $connection->prepare("delete from oldpayments where pay_id = :pay_id");
    $statement->execute([':pay_id' => $id]);
    return $statement->rowCount() > 0;
}


function successPayment(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select * from payments where pay_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetchAll();
    
}


function deletOrder(): array
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM payments");
    $statement->execute();
    return $statement->fetchAll();
    
}


function oldPayment(): array
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO oldpayments (pay_code, pro_name, pay_totalprice, pay_date, pro_quantity, pro_price, method_status, cus_id)
    SELECT pay_code, pro_name, pay_totalprice, pay_date, pro_quantity, pro_price, method_status, cus_id  FROM payments;");
    $statement->execute();
    return $statement->fetchAll();
    
}

function getOldPayments(): array
{
    global $connection;
    $statement = $connection->prepare("select * from oldpayments");
    $statement->execute();
    return $statement->fetchAll();
}

function addMoreoldPayment(string $method, int $customerID, string $date):bool
{
    global $connection;
    $statement = $connection->prepare("update payments set cus_id = :cus_id,
    method_status = :method_status where pay_date = :pay_date");
    $statement->execute([
        ":method_status" => $method,
        ":cus_id" => $customerID,
        ":pay_date" => $date
    ]);
    return $statement->rowCount() > 0;
}

function getCustomerID(){
    global $connection;
    $statement = $connection->prepare("select cus_id from oldpayments");
    $statement->execute();
    return $statement->fetchAll();
}

function getQuantity(string $pro_name):array
    {
        global $connection;
        $statement = $connection->prepare("select pro_quantity from products where pro_name = :pro_name ");
        $statement->execute([':pro_name' => $pro_name]);
        return $statement->fetch();
    }

function getPrice(){
    global $connection;
    $statement = $connection->prepare("select pay_totalprice from oldpayments");
    $statement->execute();
    return $statement->fetchAll();
}