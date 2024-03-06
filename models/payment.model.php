<?php
function createPayment( string $code,string $totalprice, string $name) : bool
{
    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("insert into payments (pay_code,pay_totalprice,pay_date,pro_name) values (:pay_code,:pay_totalprice,:pay_date,:pro_name)");
    $statement->execute([
        ':pay_code' => $code,
        ':pay_totalprice' => $totalprice,
        ':pay_date' => $time,
        ':pro_name' => $name,
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
function getPayment(): array
{
    global $connection;
    $statement = $connection->prepare("select * from payments");
    $statement->execute();
    return $statement->fetchAll();
    
}