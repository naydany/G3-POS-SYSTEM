<?php

function uploadProfile($userID, $nameID): bool
{
    global $connection;
    $query = "UPDATE users SET image = :image WHERE id = :id";
    $STMT = $connection->prepare($query);
    $STMT->execute(
        [
            ':id' => $userID,
            ':image' => $nameID,
        ]
    );

    return $STMT->rowCount() > 0;
}
