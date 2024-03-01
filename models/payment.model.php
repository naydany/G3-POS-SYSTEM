<?php

function cancelPayment(int $id) : bool

{
    global $connection;
    $statement = $connection->prepare("delete from payments where pay_id = :pay_id");
    $statement->execute([':pay_id' => $id]);
    return $statement->rowCount() > 0;
}
function getPayment(): array
{
    global $connection;
    $statement = $connection->prepare("select * from payments");
    $statement->execute();
    return $statement->fetchAll();
}