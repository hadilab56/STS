<?php

include_once '../config.php';

$db = config::getConnexion();
 

if 

// Insert into the database
$sql = "INSERT INTO `products` (`title`, `description`, `price`, `id_c`, `image`)
 VALUES
  (:title, :description, :price, :id_c, :image)";

try {

    $stmt = config::getConnexion()->prepare($sql);

    if ($stmt->execute([
        ':name' => $data["name"],
    ])) {

        echo json_encode("{'message': 'Success'}");
    } else {
        echo json_encode("{'message': 'Error in adding category'}");
    }
} catch (PDOException $e) {
    echo json_encode("{'message': 'Error in adding category'}");
}
