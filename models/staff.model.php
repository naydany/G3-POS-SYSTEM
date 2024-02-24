<?php

function createStaffs( string $name, int $number, string $email, string $password, string $address ) : bool
{

    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("insert into staffs (cas_name,cas_number,cas_email,cas_password,date, staff_addres, role) values (:name,:number,:email,:password,:date, :address, :role)");
    $statement->execute([
        ':name' => $name,
        ':number' => $number,
        ':email' => $email,
        ':password' => $password,
        ':date' => $time,
        ':address' => $address,
        ':role' => 'staff',
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
    $statement = $connection->prepare("delete from staffs where cas_id = :cas_id");
    $statement->execute([':cas_id' => $id]);
    return $statement->rowCount() > 0;
}

function editeStaff(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select * from staffs where cas_id = :cas_id");
    $statement->execute([':cas_id' => $id]);
    return $statement->fetch();
}

function updateStaffs( int $id, string $name, int $number, string $email, string $password, string $address) : bool
{

    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("update staffs set cas_name = :name, cas_number = :number, cas_email = :email, cas_password = :password,date = :time, staff_addres = :address where cas_id = :id");
    $statement->execute([
        ':name' => $name,
        ':number' => $number,
        ':email' => $email,
        ':password' => $password,
        ':time' => $time,
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