<?php
?>
<div class="container pt-4" style="max-width: 600px;">
    <h2 class="text-center" style="font-weight: bolder;">Masuk ke UShop</h2>
    <form action="controller/check_login.php" method="post">
        <div class="form-group">
            <label for="user_id">Masukkan ID</label>
            <input type="text" id="user_id" name="user_id" class="form-control" placeholder="ID">
        </div>
        <div class="form-group">
            <label for="password">Masukkan Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <div id="msg" class="form-group" style="color: red;">
                <?php
                if(isset($_SESSION['error'])) {
                    $error = $_SESSION['error'];
                    echo $error;
                }
                ?>
            </div>
        </div>
        <button class="btn btn-primary btn-block mb-3" id="button" name="login_submit">Login</button>
    </form>
</div>
<?php
unset($_SESSION['error']);
?>
