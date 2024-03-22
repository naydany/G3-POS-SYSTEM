<?php

function createAdmin(string $name, int $phone, string $email, string $password, string $address, string $role, string $img): bool
{

    global $connection;
    $statement = $connection->prepare("insert into users (name,password,email,address,phone,role,image) values (:name,:password,:email,:address,:phone,:role,:image)");
    $statement->execute([
        ':name' => $name,
        ':password' => $password,
        ':email' => $email,
        ':address' => $address,
        ':phone' => $phone,
        ':role' => $role,
        ':image' => $img,
    ]);
    return $statement->rowCount() > 0;
}

function getUser(): array
{
    global $connection;
    $statement = $connection->prepare("select * from users where role='admin'");
    $statement->execute();
    return $statement->fetchAll();
}

function deleteAdmin(int $id): bool

{
    global $connection;
    $statement = $connection->prepare("delete from users where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}


function editeAdmin(int $id): array 
{
    global $connection;
    $statement = $connection->prepare("select * from users where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function updateAdmin(int $id, string $name, string $phone, string $email, string $address): bool
{

    global $connection;
    $statement = $connection->prepare("update users set name = :name, phone = :phone, email = :email, address = :address where id = :id");
    $statement->execute([
        ':name' => $name,
        ':phone' => $phone,
        ':email' => $email,
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


