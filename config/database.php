<?php

function getConnection()
{
    try {
        $databaseConnection = new PDO(
            'mysql:host=127.0.0.1;dbname=api;port=3306',
            'root',
            'tiger',
            [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    } catch (\Throwable $th) {
        throw $th;
    }

    return $databaseConnection;
}
