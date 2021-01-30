<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Methods:  GET');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    require_once '../config/database.php';
    $users = [];
    $query = getConnection()->query('SELECT * FROM users');
    while ($row = $query->fetch()) {
        $users['users'][] = $row;
    }
    http_response_code(200);
    echo json_encode($users);
} else {
    http_response_code(403);
    echo json_encode(['message' => 'la methode n\'est pas autorisée']);
}
