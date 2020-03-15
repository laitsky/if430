<?php
session_start();
require_once "../include/config.php";

$success = $error = $id_barang = $stok_barang = $harga_barang = "";

if (isset($_POST['update_item'])) {
    $id_barang = sanitize_string($_POST['id_barang']);
    $stok_barang = sanitize_string($_POST['stok_barang']);
    $harga_barang = sanitize_string($_POST['harga_barang']);

    if ($stok_barang >= 0 && $harga_barang >= 0) {
        sql_query("UPDATE `item` SET `item_stock` = '$stok_barang', `item_price` = '$harga_barang' WHERE `item`.`item_id`='$id_barang'");
        $_SESSION['success'] = $success;
        header("Location: ../view/halaman_kasir.php");
    } else {
        $_SESSION['error'] = $error;
        header("Location: ../view/halaman_kasir.php");
    }
}
