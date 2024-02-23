<?php
function createItem(
    string $pro_name,
    string $pro_code,
    $pro_quan,
    $pro_img,
    string $pro_price,
    string $pro_cate
): bool {
    global $connection;
    $statement = $connection->prepare("insert into products (pro_name, pro_code, pro_img, pro_price, cate_id,  pro_quantity ) 
    values (:name, :image, :code, :cate,:quantity,  :price)");
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
    $statement = $connection->prepare("select * from products where id = :id");
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

function updateItem( string $pro_name,
string $pro_code,
$pro_quan,
string $pro_price,
string $pro_cate): bool
{
    global $connection;
    $statement = $connection->prepare("update products set pro_name = :name, pro_code = :code, pro_price = :price,
    cate_id = :cate, pro_quantity = :quantity where id = :id");
    $statement->execute([
        ':name' => $pro_name,
        ':code' => $pro_code,
        ':cate' => $pro_cate,
        ':quantity' => $pro_quan,
        ':price' => $pro_price,
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
