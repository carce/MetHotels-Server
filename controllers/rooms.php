<?php

$rooms = array(
    'index' => function() {
        global $db;
        $stmt = $db->query("select * from room");

        $data = array();
        while ($row = $stmt->fetch_assoc()) {
            array_push($data, $row);
        }
        return json_encode($data);
    }
);