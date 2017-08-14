<?php

include "controllers/rooms.php";
include "services/auth.php";

$router->addRoute('GET', '/it255/metHotels-server/public/index.php/rooms', $rooms['index']);
$router->addRoute('POST', '/it255/metHotels-server/public/index.php/addroom', $rooms['add']);

$router->addRoute('POST', '/it255/metHotels-server/public/index.php/login', function() { 
    return login($_POST['username'], $_POST['password']); 
});
$router->addRoute('POST', '/it255/metHotels-server/public/index.php/register', function() {
    return register($_POST['first_name'], $_POST['last_name'], $_POST['username'], $_POST['password']);
});