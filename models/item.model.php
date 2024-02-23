<?php
function createItem(string $pro_name, string $pro_code, $pro_quan, $pro_img,
string $pro_price, string $pro_cate): bool
{
    global $connection;
    $statement = $connection->prepare("insert into products (pro_name, pro_code,pro_img, pro_price, pro_quantity, cate_id ) 
    values (:name, :code, :image, :quantity, :cate, :price)");
    $statement->execute([
        ':name' => $pro_name,
        'image' => $pro_img,
        ':code' => $pro_code,
        ':cate' => $pro_cate,
        ':quantity' => $pro_quan,
        ':price' => $pro_price,
        
        
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