<?php

Router::get('/users/all', function () {
    list($code, $response) = get_all_users();

    return [$code, $response];
});

Router::get('/users/delete', function () {
    list($code, $response) = delete_user();

    return [$code, $response];
});
