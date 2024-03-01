<?php

function createAdmin( string $name, string $email, string $password, string $address, int $phone , string $role ) : bool
{

    global $connection;
    $statement = $connection->prepare("insert into users (name,password,email,address,phone,role) values (:name,:password,:email,:address,:phone,:role)");
    $statement->execute([
        ':name' => $name,
        ':password' => $password,
        ':email' => $email,
        ':address' => $address,
        ':phone' => $phone,
        ':role' => $role,
    ]);
    return $statement->rowCount() > 0;
}

function getAdmin(): array
{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll();
}

function deleteAdmin(int $id) : bool

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

function updateAdmin( int $id, string $name, string $email, string $address) : bool
{

    global $connection;
    $statement = $connection->prepare("update users set name = :name, email = :email, address = :address where id = :id");
    $statement->execute([
        ':name' => $name,
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
