<?php
function createAccount(string $name, string $email, string $password, string $role): bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO users (name, email, password,role) 
    VALUES (:name, :email, :password, :role)");
    $statement->execute([
        ':name' => $name,
        ':email' => $email,
        ':password' => $password,
        ':role' => $role,
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

// function getAllUsers(): array {
//     global $connection;
//     $statement = $connection->prepare("SELECT * FROM admins WHERE role = :role ORDER BY id ASC ");
//     $statement->execute([
//         ':role' => 'user'
//     ]);
//     return $statement->fetchAll();
// }