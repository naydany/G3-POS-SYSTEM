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
function deleteSupplier(int $id) : bool

{
    global $connection;
    $statement = $connection->prepare("delete from suppliers where sup_id = :sup_id");
    $statement->execute([':sup_id' => $id]);
    return $statement->rowCount() > 0;
}

function editeSupplier(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select * from suppliers where sup_id = :sup_id");
    $statement->execute([':sup_id' => $id]);
    return $statement->fetch();
}

function updateSupplier( int $id, string $name, string $country, string $address) : bool
{

    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("update suppliers set sup_name = :name, sup_country = :country, sup_address = :address where sup_id = :id");
    $statement->execute([
        ':name' => $name,
        ':country' => $country,
        ':address' => $address,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}