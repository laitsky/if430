<head>
    <title> Tugas Pendahuluan</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>
<?php session_start(); ?>
<div class="container" style="max-width: 480px;">
    <form action="check_login.php" class="pt-5" method="post" id="login-form">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control"
                   placeholder="Masukkan Password">
        </div>
        <div id="msg" class="form-group" style="color: red;"><?php if(isset($_SESSION['error'])) {
            $error = $_SESSION['error'];
            echo $error;
            } ?></div>
<button type="submit" class="btn btn-primary btn-block" id="button" value="loginSubmit">Sign In</button>
</form>
</div>
<?php
unset($_SESSION['error']);
?>
