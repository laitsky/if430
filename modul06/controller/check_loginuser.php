<?php
include_once '../include/db_connect.php';
include_once '../model/User.php';
$valid;
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, strip_tags($_POST['username']));
    $password = mysqli_real_escape_string($conn, strip_tags($_POST['password']));
    $query = 'SELECT * FROM user WHERE username="'.$username.'";';
    $result = $conn->query($query);
    if ($result) {
        $match = $result->fetch_assoc();
        $user = new User($match['username'], $match['password'], $match['salt']);
        if(strtolower($user->get_password()) == strtolower(md5($password.$user->get_salt()))) $valid = true;
        else $valid = false;
    }
    else $valid = false;
}
