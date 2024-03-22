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


require "../../database/database.php";

function notification(): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM products WHERE pro_quantity < 10");
    $statement->execute();
    return $statement->fetchAll();
}

// Fetch notifications and return JSON response
$notifications = notification();
echo json_encode($notifications);
?>
