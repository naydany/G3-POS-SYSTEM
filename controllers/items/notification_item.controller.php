<?php
require "../../database/database.php";
function notification(): array
{
    global $connection;
    $statement = $connection->prepare("select * from products where pro_quantity < 0");
    $statement->execute();
    return $statement->fetchAll();
}
?>

