
<?php
function accountExist(string $email): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM staffs WHERE cas_email = :email");
    $statement->execute([
        ':email' => $email
    ]);
    if ($statement->rowCount() > 0) {
        return $statement->fetch();
    } else {
        return [];
    }
}