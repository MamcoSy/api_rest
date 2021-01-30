<?php

function get_all_users()
{
    header('Access-Control-Allow-Methods:  GET');
    $response    = getConnection()->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);

    return [200, $response];
}