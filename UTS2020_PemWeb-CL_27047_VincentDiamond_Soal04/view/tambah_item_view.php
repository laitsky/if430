<?php
require_once "../include/header.php";
if (!isset($_SESSION['user_id']))
    echo "<meta http-equiv=\"refresh\" content=\"0;URL='../index.php'\" />";
$highest_id = mysqli_fetch_assoc(sql_query("SELECT MAX(item_id) FROM `item`"));
$next_id = $highest_id['MAX(item_id)'] + 1;
?>
<div class="container py-3" style="max-width: 600px;">
    <h2 class="text-center" style="font-weight: bold;">Tambah User</h2>
    <form action="../controller/tambah_item.php" method="post">
        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input required type="text" class="form-control" id="nama_barang" name="nama_barang"
                   placeholder="Masukkan nama barang...">
        </div>
        <div class="form-group">
            <label for="id_barang">ID Barang:</label>
            <input disabled type="text" class="form-control" id="id_barang" name="id_barang"
                   value="<?php echo $next_id; ?>"
                   placeholder="Masukkan ID barang...">
        </div>
        <div class="form-group">
            <label for="stok_barang">Stok Barang:</label>
            <input required type="number" class="form-control" id="stok_barang" name="stok_barang"
                   placeholder="Masukkan stok barang...">
        </div>
        <div class="form-group">
            <label for="harga_barang">Harga Barang:</label>
            <input required type="number" class="form-control" id="harga_barang" name="harga_barang"
                   placeholder="Masukkan harga barang...">
        </div>
        <div class="form-group">
            <label for="deskripsi_barang">Deskripsi Barang:</label>
            <textarea required class="form-control" id="deskripsi_barang" style="resize: none;" rows="3"
                      name="deskripsi_barang"></textarea>
        </div>
        <button class="btn btn-block btn-success" name="add_item"><i class="las la-plus"></i>Tambah Barang!</button>
        <a href="halaman_manager.php" class="btn btn-block btn-outline-secondary"><i
                    class="las la-angle-double-left"></i>Kembali</a>
    </form>
</div>
