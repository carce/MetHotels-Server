<?php

function create_token($username, $password) {
    global $db;
    $token = sha1($username . $password . uniqid());

    return $token;
}

function register($first_name, $last_name, $username, $password) {
    global $db;
    $hashPass = sha1($password);
    $token = create_token($username, $password);

    $stmt = $db->query("insert into `user` (`first_name`, `last_name`, `username`, `password`, `token`) 
    values ('$first_name', '$last_name', '$username', '$hashPass', '$token')");

    return json_encode(array('token' => $token));
}

function login($username, $password) {
    global $db;
    $hashPass = sha1($password);

    $stmt = $db->query("select * from user where username = '$username' and password = '$hashPass'");

    if ($stmt->num_rows > 0) {
        $token = create_token($username, $password);
        $stmt = $db->query("update user set token = '$token' where username = '$username'");

        if ($stmt) {
            return json_encode(array('token' => $token));
        }
    }

}

