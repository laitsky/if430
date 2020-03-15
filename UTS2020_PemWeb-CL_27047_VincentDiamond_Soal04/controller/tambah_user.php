<?php
session_start();
require_once "../include/config.php";

$success = $error = $id = $nama_depan = $nama_belakang = $password = $role = $alamat = "";
$highest_id = mysqli_fetch_assoc(sql_query("SELECT MAX(user_id) FROM `user`"));
$next_id = $highest_id['MAX(user_id)'] + 1;

if(isset($_POST['add_user'])) {
    $id = $next_id;
    $nama_depan = sanitize_string($_POST['nama_depan']);
    $nama_belakang = sanitize_string($_POST['nama_belakang']);
    $password = md5(sanitize_string($_POST['password']));
    $role = sanitize_string($_POST['role']);
    $alamat = sanitize_string($_POST['alamat']);

    sql_query("INSERT INTO `user` VALUES ('$id', '$password', '$nama_depan', '$nama_belakang', '$role', '$alamat')");
    $_SESSION['success-add'] = $success;
    header("Location: ../view/halaman_admin.php");
}
