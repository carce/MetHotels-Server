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
    },
    
    'add' => function() {
        global $db;
        $name = $_POST['name'];
        $fits = $_POST['fits'];

        $stmt = $db->query("insert into room (name, fits) values ('$name', $fits)");

        return json_encode(array('success' => $stmt));
    },

    'delete' => function() {
        global $db;
        $id = $_POST['id'];

        $stmt = $db->query("delete from room where id=$id");

        return json_encode(array('success' => $stmt));
    }
);