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


function successPayment(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select * from payments where pay_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetchAll();
    
}
