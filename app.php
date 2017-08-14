<?php

include "lib/db.php";
include "lib/router.php";
$router = new Router();
include "routes.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: Origin, Content-Type, x-xsrf-token, x_csrftoken');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    return;
}
echo $router->run();