<?php

include_once '../config.php';

$db = config::getConnexion();

$query = $db->prepare('SELECT * FROM products');

$query->execute();

return $query->fetchAll(PDO::FETCH_ASSOC);
