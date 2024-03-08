<?php
function createCategory(string $category, string $description): bool
{
    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("insert into categories(cate_name, cate_date, cate_desc) values (:cate_name, :cate_date, :cate_desc)");
    $statement->execute([
        ':cate_name' => $category,
        ':cate_date' => $time,
        ':cate_desc' => $description
    ]);

    return $statement->rowCount() > 0;
}

function editeCategory(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select * from categories where cate_id = :cate_id");
    $statement->execute([':cate_id' => $id]);
    return $statement->fetch();
}

function getCategory(): array
{
    global $connection;
    $statement = $connection->prepare("select * from categories");
    $statement->execute();
    return $statement->fetchAll();
}

function updateCategory(int $id, string $name, string $description): bool
{
    global $connection;
    $statement = $connection->prepare("update categories set cate_name = :cate_name , cate_desc = :cate_desc where cate_id = :cate_id");
    $statement->execute([
        ':cate_name' => $name,
        ':cate_id' => $id,
        ':cate_desc' => $description

    ]);

    return $statement->rowCount() > 0;
}

function deleteCategory(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("delete from categories where cate_id = :cate_id");
    $statement->execute([':cate_id' => $id]);
    return $statement->rowCount() > 0;
}

function viewCategory(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select * from categories where cate_id = :cate_id");
    $statement->execute([':cate_id' => $id]);
    return $statement->fetch();
}

function countProductInCategory(string $name_category): array
{
    global $connection;
    $statement = $connection->prepare("select * from products where cate_name = :cate_name");
    $statement->execute([':cate_name' => $name_category]);
    return $statement->fetchAll();
}


function selectCategory(string $name_cate)
{
    global $connection;
    $statement = $connection->prepare("select cate_name from categories where cate_name = :name_cate");
    $statement->execute([
        ":name_cate" => $name_cate,
    ]);
    return $statement->fetchAll();
}
