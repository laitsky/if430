<?php
session_start();
$error = "Email tidak terdaftar atau password salah, silakan coba lagi";
include_once "include/db_config.php";
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $salt;
    $get_salt = "SELECT * FROM `user` WHERE email='$email'";
    $get_salt_res = $conn->query($get_salt);
    while ($row = $get_salt_res->fetch()) {
        $salt = $row['salt'];
    }
    $password = md5($_POST['password'] . $salt);
    $stmt = "SELECT COUNT(*) FROM `user` WHERE email='$email' AND pass='$password'";
    $res = $conn->query($stmt);
    $number_of_rows = (int)$res->fetchColumn();

    if ($number_of_rows == 1) {
        $_SESSION['email'] = $email;
        header("Location: tabel_mahasiswa.php");
    }
    else {
        $_SESSION['error'] = $error;
        header("Location: login_page.php");
    }
}
