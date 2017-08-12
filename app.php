<?php

include "lib/db.php";
include "lib/router.php";
$router = new Router();
include "routes.php";

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token, x_csrftoken');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    return;
}
echo $router->run();