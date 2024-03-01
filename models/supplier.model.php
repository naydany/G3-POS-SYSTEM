<?php

function createSupplier( string $name, int $phone, string $address) : bool
{

    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("insert into suppliers (sup_name,phone,sup_address) values (:name,:phone,:address)");
    $statement->execute([
        ':name' => $name,
        ':phone' => $phone,
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

function updateSupplier( int $id, string $name, string $phone, string $address) : bool
{

    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("update suppliers set sup_name = :name,phone = :phone, sup_address = :address where sup_id = :id");
    $statement->execute([
        ':name' => $name,
        ':phone' => $phone,
        ':address' => $address,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}