<?php

function delete_user()
{
    header('Access-Control-Allow-Methods:  POST');
    $donnes = file_get_contents('php://input');
    $donnes = json_decode($donnes);
    $delete = getConnection()->prepare('DELETE FROM users WHERE id = :id');
    $delete->execute(['id' => $donnes->id]);

    return [200, ''];
}
