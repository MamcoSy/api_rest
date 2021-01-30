<?php
require_once 'config/__init__.php';
$response = Router::run($_SERVER['REQUEST_URI']);
send($response);
