<?php
session_start();
require_once "../include/config.php";

$success = $error = "";
$id_barang = sanitize_string($_GET['item_id']);
$del = sql_query("DELETE FROM `item` WHERE `item_id`='$id_barang'");
if (del) {
    $_SESSION['success'] = $success;
    header("Location: ../view/halaman_manager.php");
}
