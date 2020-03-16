<?php
require_once "../include/header.php";
if (!isset($_SESSION['user_id']))
    echo "<meta http-equiv=\"refresh\" content=\"0;URL='../index.php'\" />";
$id = $_GET['item_id'];
$detail_item_res = mysqli_fetch_assoc(sql_query("SELECT * FROM item WHERE item_id='$id'"));
?>
<div class="container pt-5" style="max-width: 600px;">
    <h2 class="text-center" style="font-weight: bold;">Detail Item (Customer)</h2>
    <div class="row py-4">
        <div class="col-sm-6">
            <h6>ID Barang:</h6>
        </div>
        <div class="col-sm-6">
            <h6><?php echo $detail_item_res['item_id'] ?></h6>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-sm-6">
            <h6>Nama Barang:</h6>
        </div>
        <div class="col-sm-6">
            <h6><?php echo $detail_item_res['item_name'] ?></h6>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-sm-6">
            <h6>Stok Barang:</h6>
        </div>
        <div class="col-sm-6">
            <h6><?php echo $detail_item_res['item_stock'] ?></h6>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-sm-6">
            <h6>Harga Barang:</h6>
        </div>
        <div class="col-sm-6">
            <h6><?php echo $detail_item_res['item_price'] ?></h6>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-sm-6">
            <h6>Deskripsi Barang:</h6>
        </div>
        <div class="col-sm-6">
            <h6><?php echo $detail_item_res['item_desc'] ?></h6>
        </div>
    </div>
    <a class="btn btn-danger" href="halaman_pembeli.php"><i class="las la-angle-double-left"></i>Kembali</a>
</div>
