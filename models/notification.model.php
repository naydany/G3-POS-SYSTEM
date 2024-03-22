<?php

function notification(): array
{
    global $connection;
    $statement = $connection->prepare("select * from products where pro_quantity < 1");
    $statement->execute();
    return $statement->fetchAll();
}
?>