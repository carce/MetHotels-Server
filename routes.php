<?php

include "controllers/rooms.php";

$router->addRoute('GET', '/it255/metHotels-server/public/index.php/rooms', $rooms['index']);
$router->addRoute('POST', '/it255/metHotels-server/public/index.php/addroom', $rooms['add']);