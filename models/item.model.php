<?php
function createItem(
    string $pro_name,
    string $pro_code,
    int $pro_quan,
    string $pro_img,
    string $pro_price,
    string $pro_cate
): bool {
    global $connection;
    $statement = $connection->prepare("insert into products (pro_img,pro_name, pro_code, pro_price, cate_id,  pro_quantity ) 
    values ( :image, :name,:code, :cate,:quantity,  :price)");
    $statement->execute([
        ':name' => $pro_name,
        ':code' => $pro_code,
        'image' => $pro_img,
        ':cate' => $pro_cate,
        ':quantity' => $pro_quan,
        ':price' => $pro_price,


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

function updateItem( string $pro_name,string $pro_code , string $pro_price, int $pro_quan,int $pro_cate, int $pro_id): bool
{
 
    global $connection;
    $statement = $connection->prepare("update products set pro_name = :pro_name, pro_code = :pro_code, pro_price = :pro_price,
    cate_id = :cate_id, pro_quantity = :pro_quantity where pro_id = :pro_id");
    // $statement->execute();
    $statement->execute([
        ":pro_name" => $pro_name,
        ":pro_code" => $pro_code,
        ":cate_id" => $pro_cate,
        ":pro_quantity" => $pro_quan,
        ":pro_price" => $pro_price,
        ":pro_id"=> $pro_id,
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
