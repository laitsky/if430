<?php
session_start();
require_once "../include/config.php";

$success = $error = "";
$user = sanitize_string($_GET['user_id']);
$del = sql_query("DELETE FROM `user` WHERE `user_id` = '$user'");
if (del) {
    $_SESSION['success'] = $success;
    header("Location: ../view/halaman_admin.php");
}
