<?php
session_start();
include_once "../include/header.php";
$highest_id = mysqli_fetch_assoc(sql_query("SELECT MAX(item_id) FROM `item`"));
$next_id = $highest_id['MAX(item_id)'] + 1;
?>

<div class="container py-3" style="max-width: 600px;">
    <div id="register-card" class="card-shadow" style="padding: 1.5em;">
        <h2 class="text-center" style="font-weight: bolder;">Secret Page UShop</h2>
        <h5 class="text-center">Bergabunglah bersama kami. </h5>
        <form action="../controller/check_daftar.php" method="post">
            <div class="form-group">
                <label for="user_id">Masukkan ID:</label>
                <input disabled type="text" id="user_id" name="user_id" maxlength="10" class="form-control"
                       value="<?php echo $next_id; ?>">
            </div>
            <div class="form-group">
                <label for="first_name">Masukkan Nama Depan:</label>
                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Nama Depan"
                       required>
            </div>
            <div class="form-group">
                <label for="last_name">Masukkan Nama Belakang:</label>
                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Nama Belakang">
            </div>
            <div class="form-group">
                <label for="password">Masukkan Password:</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                       required>
            </div>
            <div class="form-group">
                <label for="role">Peran:</label>
                <select name="role" class="custom-select" required>
                    <option selected disabled>Pilih peran kamu...</option>
                    <option value="1">Admin</option>
                    <option value="2">Manager</option>
                    <option value="3">Kasir</option>
                    <option value="4">Pembeli</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Masukkan Alamat:</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <div id="msg" class="form-group" style="color: red;">
                    <?php
                    if (isset($_SESSION['error'])) {
                        $error = $_SESSION['error'];
                        echo $error;
                    }
                    ?>
                </div>
            </div>
            <button class="btn btn-primary btn-block mb-3" id="button" name="register"><i class="las la-pen"></i>Daftar
            </button>
            <a href="../index.php" class="btn btn-block btn-outline-secondary"><i class="las la-angle-double-left"></i>Kembali</a>
        </form>
    </div>
</div>
<?php
unset($_SESSION['error']);
?>
