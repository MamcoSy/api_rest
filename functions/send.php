<?php

function send($response)
{
    list($code, $response) = $response;
    http_response_code($code);
    echo json_encode($response);
}
