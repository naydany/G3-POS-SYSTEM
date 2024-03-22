<?php

function createItem(
    string $pro_name,
    string $pro_code,
    int $pro_quan,
    string $pro_img,
    string $pro_price,
    string $pro_cate,
    string $sup_name,
): bool {
    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');

    global $connection;
    $statement = $connection->prepare("insert into products (pro_img,pro_name, pro_code, cate_name, sup_name, pro_quantity, pro_price, pro_date) 
    values ( :image, :name,:code, :cate, :sup_name, :quantity, :price, :pro_date)");
    $statement->execute([
        ':name' => $pro_name,
        ':code' => $pro_code,
        ':image' => $pro_img,
        ':cate' => $pro_cate,
        ':sup_name' =>  $sup_name,
        ':quantity' => $pro_quan,
        ':price' => $pro_price,
        ':pro_date' => $time

    ]);

    return $statement->rowCount() > 0;
}

function getItemID(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select * from products where pro_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function getItem(): array
{
    global $connection;
    $statement = $connection->prepare("select * from products");
    $statement->execute();
    return $statement->fetchAll();
}

function updateItem(string $pro_name, string $pro_code, string $pro_price, int $pro_quan, int $pro_id): bool
{

    global $connection;
    $statement = $connection->prepare("update products set pro_name = :pro_name, pro_code = :pro_code, pro_price = :pro_price,
    pro_quantity = :pro_quantity where pro_id = :pro_id");
    // $statement->execute();
    $statement->execute([
        ":pro_name" => $pro_name,
        ":pro_code" => $pro_code,
        ":pro_quantity" => $pro_quan,
        ":pro_price" => $pro_price,
        ":pro_id" => $pro_id,
    ]);

    return $statement->rowCount() > 0;
}

function deleteItem(int $pro_id): bool
{
    global $connection;
    $statement = $connection->prepare("delete from products where pro_id = :pro_id");
    $statement->execute([':pro_id' => $pro_id]);
    return $statement->rowCount() > 0;
}


function countNameCategory(): array
{
    global $connection;
    $statement = $connection->prepare("select cate_name from categories");
    $statement->execute();
    return $statement->fetchAll();
}

function countNameSuppliers(): array
{
    global $connection;
    $statement = $connection->prepare("select sup_name from suppliers");
    $statement->execute();
    return $statement->fetchAll();
}


function selectCategory(string $name_cate)
{
    global $connection;
    $statement = $connection->prepare("select * from products where cate_name = :name_cate");
    $statement->execute([
        ":name_cate" => $name_cate,
    ]);
    return $statement->fetchAll();
}


function updateStock(string $pro_name, int $pro_quan): bool
{

    global $connection;
    $statement = $connection->prepare("update products set pro_quantity = :pro_quantity
    where pro_name = :pro_name");
    $statement->execute([
        ":pro_name" => $pro_name,
        ":pro_quantity" => $pro_quan,
    ]);
    return $statement->rowCount() > 0;
}

