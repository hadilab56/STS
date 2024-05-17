<?php

include_once '../config.php';

$db = config::getConnexion();

// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);

// Insert into the database
$sql = "INSERT INTO category (NAME) VALUES (:name)";

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
