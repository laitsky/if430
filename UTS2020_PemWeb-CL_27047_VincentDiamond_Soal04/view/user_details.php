<?php
require_once "../include/header.php";
$id = $_GET['user_id'];
$user_detail_res = mysqli_fetch_assoc(sql_query("SELECT user_id, `password`, first_name, last_name, r.role_id, address, role_name FROM user u INNER JOIN role r WHERE u.role_id = r.role_id AND user_id='$id' "));
?>
<div class="container py-3" style="max-width: 600px;">
    <h2 class="text-center" style="font-weight: bold;">Detail User</h2>
    <form action="../controller/update_user.php" method="post">
        <div class="form-group">
            <label for="id_user">ID:</label>
            <input disabled type="text" class="form-control" id="id_user"
                   value="<?php echo $user_detail_res['user_id'] ?>">
        </div>
        <div class="form-group">
            <label for="nama_depan">Nama Depan:</label>
            <input required type="text" class="form-control" id="nama_depan" name="nama_depan"
                   value="<?php echo $user_detail_res['first_name']; ?>">
        </div>
        <div class="form-group">
            <label for="nama_belakang">Nama Belakang:</label>
            <input required type="text" class="form-control" id="nama_belakang" name="nama_belakang"
                   value="<?php echo $user_detail_res['last_name']; ?>">
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" class="custom-select" required>
                <option selected
                        value="<?php echo $user_detail_res['role_id'] ?>"><?php echo $user_detail_res['role_name'] ?></option>
                <option value="1">Admin</option>
                <option value="2">Manager</option>
                <option value="3">Kasir</option>
                <option value="4">Pembeli</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea required class="form-control" id="alamat" style="resize: none;" rows="3"
                      name="alamat"><?php echo $user_detail_res['address']; ?></textarea>
        </div>
        <div class="form-group">
            <input hidden type="text" class="form-control" name="id_user"
                   value="<?php echo $user_detail_res['user_id'] ?>">
        </div>
        <button class="btn btn-block btn-primary" name="update_user"><i class="las la-edit"></i>Perbarui!</button>
        <a href="halaman_admin.php" class="btn btn-block btn-outline-secondary"><i class="las la-angle-double-left"></i>Kembali</a>
    </form>
</div>
