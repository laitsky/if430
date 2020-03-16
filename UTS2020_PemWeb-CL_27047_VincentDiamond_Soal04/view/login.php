<?php
?>
<div class="container pt-4" style="max-width: 600px;">
    <div id="login-card" class="card-shadow" style="padding: 1.5em;">
        <h2 class="text-center" style="font-weight: bolder;">Masuk ke UShop</h2>
        <?php
        if (isset($_SESSION['error'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                ID atau Password salah!
            </div>
        <?php } ?>
        <form action="controller/check_login.php" method="post">
            <div class="form-group">
                <label for="user_id">Masukkan ID</label>
                <input autofocus type="text" id="user_id" name="user_id" class="form-control" placeholder="ID">
            </div>
            <div class="form-group">
                <label for="password">Masukkan Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button class="btn btn-primary btn-block mb-3" id="button" name="login_submit"><i
                        class="las la-sign-in-alt"></i>Login
            </button>
        </form>
    </div>
</div>
<?php
unset($_SESSION['error']);
?>
