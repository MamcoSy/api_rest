<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

require_once 'classes/Router.php';
require_once 'config/database.php';
require_once 'functions/get_all_users.php';
require_once 'functions/delete_user.php';
require_once 'functions/send.php';
require_once 'routes.php';

$response = [405, ['message' => 'Method non autorisé']];
