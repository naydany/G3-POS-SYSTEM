<?php

function createAdmin( string $name, string $email, string $password, string $address ) : bool
{

    global $connection;
    $statement = $connection->prepare("insert into users (name,password,email,address) values (:name,:password,:email,:address)");
    $statement->execute([
        ':name' => $name,
        ':password' => $password,
        ':email' => $email,
        ':address' => $address,
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