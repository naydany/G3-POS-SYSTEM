<?php

function createSupplier( string $name, string $country, string $address) : bool
{

    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("insert into suppliers (sup_name,sup_country,sup_address) values (:name,:country,:address)");
    $statement->execute([
        ':name' => $name,
        ':country' => $country,
        ':address' => $address
    ]);
    return $statement->rowCount() > 0;
}


function getSuppliers(): array
{
    global $connection;
    $statement = $connection->prepare("select * from suppliers");
    $statement->execute();
    return $statement->fetchAll();
}