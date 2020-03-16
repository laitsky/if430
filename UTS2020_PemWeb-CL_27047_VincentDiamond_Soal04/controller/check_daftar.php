<?php
session_start();
require_once "../include/config.php";

$error = $id = $password = $first_name = $last_name = $role = $address = "";
$highest_id = mysqli_fetch_assoc(sql_query("SELECT MAX(user_id) FROM `user`"));
$next_id = $highest_id['MAX(user_id)'] + 1;
if (isset($_POST['register'])) {
    $id = $next_id;
    $password = md5(sanitize_string($_POST['password']));
    $first_name = sanitize_string($_POST['first_name']);
    $last_name = sanitize_string($_POST['last_name']);
    $role = sanitize_string($_POST['role']);
    $address = sanitize_string($_POST['address']);

    $res = sql_query("SELECT * FROM user WHERE user_id='$id'");
    if ($res->num_rows) {
        $error = "Maaf, ID telah dipakai. Silakan mendaftar dengan ID lain.";
        $_SESSION['error'] = $error;
        header("Location: ../view/daftar.php");
    } else {
        sql_query("INSERT INTO user VALUES('$id', '$password', '$first_name', '$last_name', '$role', '$address')");
        header("Location: ../index.php");
    }
}
