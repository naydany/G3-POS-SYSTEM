<?php
function createCategory(string $category): bool
{
    $timezone = new DateTimeZone('Asia/Phnom_Penh');
    $date = new DateTime('now', $timezone);
    $time = $date->format('Y-m-d H:i:s');
     
    global $connection;
    $statement = $connection->prepare("insert into categories(cate_name, cate_date) values (:cate_name, :cate_date)");
    $statement->execute([
        ':cate_name' => $category,
        ':cate_date' => $time
    ]);

    return $statement->rowCount() > 0;
}

function getPost(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select * from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function getCategory(): array
{
    global $connection;
    $statement = $connection->prepare("select * from categories");
    $statement->execute();
    return $statement->fetchAll();
}

function updatePost(string $title, string $description, int $id): bool
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

function deleteCategory(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("delete from categories where cate_id = :cate_id");
    $statement->execute([':cate_id' => $id]);
    return $statement->rowCount() > 0;
}
