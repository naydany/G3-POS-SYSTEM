<?php

function createStaffs( string $name, int $number, string $email, string $password, string $address,string $role ) : bool
{

    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("insert into users (name,phone,email,password, address, role) values (:name,:number,:email,:password, :address, :role)");
    $statement->execute([
        ':name' => $name,
        ':number' => $number,
        ':email' => $email,
        ':password' => $password,
        // ':date' => $time,
        ':address' => $address,
        ':role' => $role,
    ]);
    return $statement->rowCount() > 0;
}
function getstaffs(): array
{
    global $connection;
    $statement = $connection->prepare("select * from users where role='staff'");
    $statement->execute();
    return $statement->fetchAll();
}


function deleteStaffs(int $id) : bool

{
    global $connection;
    $statement = $connection->prepare("delete from users where id = :cas_id");
    $statement->execute([':cas_id' => $id]);
    return $statement->rowCount() > 0;
}

function editeStaff(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select * from users where id = :cas_id");
    $statement->execute([':cas_id' => $id]);
    return $statement->fetch();
}

function updateStaffs( int $id, string $name, int $number, string $email, string $password, string $address) : bool
{


    global $connection;
    $statement = $connection->prepare("update staffs set cas_name = :name, cas_number = :number, cas_email = :email, cas_password = :password, address = :address where cas_id = :id");
    $statement->execute([
        ':name' => $name,
        ':number' => $number,
        ':email' => $email,
        ':password' => $password,
        ':address' => $address,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}


function accountExist(string $email): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE email = :email");
    $statement->execute([
        ':email' => $email
    ]);
    if ($statement->rowCount() > 0) {
        return $statement->fetch();
    } else {
        return [];
    }
}