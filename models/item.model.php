<?php
function createItem(string $pro_name, string $pro_code, $pro_desc, $pro_img,
string $pro_price, string $pro_date): bool
{
    global $connection;
    $statement = $connection->prepare("insert into products (pro_name, pro_code, pro_desc, pro_img, pro_price, pro_date) 
    values (:pro_name, :pro_code, :pro_desc, :pro_image, :pro_price, :pro_date)");
    $statement->execute([
        ':pro_name' => $pro_name,
        ':pro_code' => $pro_code,
        ':pro_desc' => $pro_desc,
        ':pro_image' => $pro_img,
        ':pro_price' => $pro_price,
        ':pro_date' => $pro_date,


    ]);

    return $statement->rowCount() > 0;
}

function getPost(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function getItem() : array
{
    global $connection;
    $statement = $connection->prepare("select * from products");
    $statement->execute();
    return $statement->fetchAll();
}

function updatePost(string $title, string $description, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':id' => $id

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