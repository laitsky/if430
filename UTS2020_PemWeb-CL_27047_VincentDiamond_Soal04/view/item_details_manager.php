<?php
require_once "../include/header.php";
$id = $_GET['item_id'];
$detail_item_res = mysqli_fetch_assoc(sql_query("SELECT * FROM item WHERE item_id='$id'"));
?>
<div class="container py-3" style="max-width: 600px;">
    <h2 class="text-center" style="font-weight: bold;">Detail Item (Manager)</h2>
    <form action="../controller/update_item_manager.php" method="post">
        <div class="form-group py-3">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                   value="<?php echo $detail_item_res['item_name']; ?>"
        </div>
        <div class="form-group py-3">
            <label for="id_barang">ID Barang:</label>
            <input disabled type="text" class="form-control" id="id_barang" name="id"
                   value="<?php echo $detail_item_res['item_id']; ?>"
        </div>
        <div class="form-group py-3">
            <label for="stok_barang">Stok Barang:</label>
            <input required type="text" class="form-control" id="stok_barang" name="stok_barang"
                   value="<?php echo $detail_item_res['item_stock']; ?>"
        </div>
        <div class="form-group py-3">
            <label for="harga_barang">Harga Barang:</label>
            <input required type="text" class="form-control" id="harga_barang" name="harga_barang"
                   value="<?php echo $detail_item_res['item_price']; ?>"
        </div>
        <div class="form-group py-3">
            <label for="deskripsi_barang">Deskripsi Barang:</label>
            <textarea required class="form-control" id="deskripsi_barang" style="resize: none;" rows="3"
                      name="deskripsi_barang"><?php echo $detail_item_res['item_desc']; ?></textarea>
        </div>
        <div class="form-group">
            <input hidden type="text" class="form-control" id="id_barang" name="id_barang"
                   value="<?php echo $detail_item_res['item_id']; ?>"
        </div>
        <div class="mt-3">
            <button class="btn btn-block btn-success" name="update_item_m"><i class="las la-edit"></i>Perbarui</button>
            <a href="halaman_manager.php" class="btn btn-block btn-outline-danger"><i class="las la-angle-double-left"></i>Kembali</a>
        </div>
    </form>
</div>
