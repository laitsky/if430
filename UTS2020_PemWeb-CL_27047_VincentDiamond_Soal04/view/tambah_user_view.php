<?php
require_once "../include/header.php";
if (!isset($_SESSION['user_id']))
    echo "<meta http-equiv=\"refresh\" content=\"0;URL='../index.php'\" />";
$highest_id = mysqli_fetch_assoc(sql_query("SELECT MAX(user_id) FROM `user`"));
$next_id = $highest_id['MAX(user_id)'] + 1;
?>
<div class="container py-3" style="max-width: 600px;">
    <h2 class="text-center" style="font-weight: bold;">Tambah User</h2>
    <form action="../controller/tambah_user.php" method="post">
        <div class="form-group">
            <label for="id_user">ID:</label>
            <input disabled type="text" class="form-control" id="id_user" name="id_user"
                   value="<?php echo $next_id; ?>">
        </div>
        <div class="form-group">
            <label for="nama_depan">Nama Depan:</label>
            <input required type="text" class="form-control" id="nama_depan" name="nama_depan"
                   placeholder="Masukkan nama depan...">
        </div>
        <div class="form-group">
            <label for="nama_belakang">Nama Belakang:</label>
            <input required type="text" class="form-control" id="nama_belakang" name="nama_belakang"
                   placeholder="Masukkan nama belakang...">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input required type="password" class="form-control" id="password" name="password"
                   placeholder="Masukkan password...">
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" class="custom-select" required>
                <option selected disabled>Pilih role kamu...</option>
                <option value="2">Manager</option>
                <option value="3">Kasir</option>
                <option value="4">Pembeli</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea required class="form-control" id="alamat" style="resize: none;" rows="3" name="alamat"></textarea>
        </div>
        <button class="btn btn-block btn-success" name="add_user"><i class="las la-plus"></i>Tambah!</button>
        <a href="halaman_admin.php" class="btn btn-block btn-outline-secondary"><i class="las la-angle-double-left"></i>Kembali</a>
    </form>
</div>
