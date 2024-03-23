<?php
require "../../database/database.php";

function notification(): array
{
    global $connection;
    $statement = $connection->prepare("select * from products where pro_quantity < 10");
    $statement->execute();
    return $statement->fetchAll();
}
?>

