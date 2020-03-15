<?php
session_start();
require_once "../include/config.php";

$success = $error = $id = $nama_depan = $nama_belakang = $role = $alamat = $password = "";

if (isset($_POST['update_user'])) {
    $id = sanitize_string($_POST['id_user']);
    $nama_depan = sanitize_string($_POST['nama_depan']);
    $nama_belakang = sanitize_string($_POST['nama_belakang']);
    $role = sanitize_string($_POST['role']);
    $alamat = sanitize_string($_POST['alamat']);
    $password = sanitize_string($_POST['password']);

    sql_query("UPDATE `user` SET `first_name`='$nama_depan', `last_name`='$nama_belakang', `role_id`='$role', `address`='$alamat', `password`='$password' WHERE `user_id` = '$id'");
    $_SESSION['success'] = $success;
    header("Location: ../view/halaman_admin.php");
}
