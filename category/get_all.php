<?php

include_once '../config.php';

$db = config::getConnexion();

$query = $db->prepare('SELECT * FROM category');

$query->execute();

return $query->fetchAll(PDO::FETCH_ASSOC);
