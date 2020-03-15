<?php
session_start();
require_once "../include/config.php";

$success = $error = $id_barang = $nama_barang = $stok_barang = $harga_barang = $deskripsi_barang = "";
$highest_id = mysqli_fetch_assoc(sql_query("SELECT MAX(item_id) FROM `item`"));
$next_id = $highest_id['MAX(item_id)'] + 1;

if(isset($_POST['add_item'])) {
    $id_barang = $next_id;
    $nama_barang = sanitize_string($_POST['nama_barang']);
    $stok_barang = sanitize_string($_POST['stok_barang']);
    $harga_barang = sanitize_string($_POST['harga_barang']);
    $deskripsi_barang = sanitize_string($_POST['deskripsi_barang']);

    if($stok_barang >= 0 && $harga_barang >= 0) {
        sql_query("INSERT INTO `item` VALUES ('$id_barang', '$nama_barang', '$stok_barang', '$harga_barang', '$deskripsi_barang')");
        $_SESSION['success-add'] = $success;
        header("Location: ../view/halaman_manager.php");
    } else {
        $_SESSION['error'] = $error;
        header("Location: ../view/halaman_manager.php");
    }
}
