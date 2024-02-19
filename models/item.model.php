<?php
function createItem(string $pro_name, string $pro_code, $pro_quan, $pro_img,
string $pro_price, string $pro_cate): bool
{
    global $connection;
    $statement = $connection->prepare("insert into products (pro_name, pro_code,pro_img, pro_price, pro_quantity, cate_id ) 
    values (:name, :code, :image, :quantity, :cate, :price)");
    $statement->execute([
        ':name' => $pro_name,
        ':code' => $pro_code,
        'image' => $pro_img,
        ':price' => $pro_price,
        ':quantity' => $pro_quan,
        ':cate' => $pro_cate,
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

function getPosts() : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts");
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

function deletePost(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}