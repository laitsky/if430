<?php
session_start();
require_once "../include/config.php";

$error = $id = $password = "";
if (isset($_POST['login_submit'])) {
    $id = sanitize_string($_POST['user_id']);
    $password = sanitize_string($_POST['password']);
    if ($id == "" || $password == "") {
        $error = "Masukkan ID dan atau Password kamu!";
        $_SESSION['error'] = $error;
        header("Location: ../index.php");
    } else {
        $res = sql_query("SELECT user_id,password FROM user WHERE user_id='$id' AND password='$password'");

        if ($res->num_rows == 0) {
            $error = "ID atau Password salah!";
            $_SESSION['error'] = $error;
            header("Location: ../index.php");
        } else {
            $res = mysqli_fetch_assoc(sql_query("SELECT u.role_id, r.role_name FROM user u INNER JOIN role r ON u.role_id = r.role_id WHERE u.user_id = '$id'"));
            $_SESSION['user_id'] = $id;
            $_SESSION['password'] = $password;
            $_SESSION['role_id'] = $res['role_id'];
            $_SESSION['role_name'] = $res['role_name'];

            switch ($res['role_name']) {
                case "Admin":
                    header("Location: ../view/halaman_admin.php");
                    break;
                case "Manager":
                    header("Location: ../view/halaman_manager.php");
                    break;
                case "Kasir":
                    header("Location: ../view/halaman_kasir.php");
                    break;
                case "Pembeli":
                    header("Location: ../view/halaman_pembeli.php");
                    break;
                default:
                    header("Location: ../index.php");
                    break;
            }
        }
    }
}
?>
