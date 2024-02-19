<?php

function createStaffs( string $name, int $number, string $email, string $password, string $address) : bool
{

    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("insert into staffs (cas_name,cas_number,cas_email,cas_password,date, staff_addres) values (:name,:number,:email,:password,:date, :address)");
    $statement->execute([
        ':name' => $name,
        ':number' => $number,
        ':email' => $email,
        ':password' => $password,
        ':date' => $time,
        ':address' => $address
    ]);
    return $statement->rowCount() > 0;
}
function getstaffs(): array
{
    global $connection;
    $statement = $connection->prepare("select * from staffs");
    $statement->execute();
    return $statement->fetchAll();
}


function deleteStaffs(int $id) : bool

{
    global $connection;
    $statement = $connection->prepare("delete from staffs where cas_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}
