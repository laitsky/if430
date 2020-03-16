<?php
error_reporting(0);
session_start();
include_once "config.php";
if (isset($_SESSION['user_id'])) {
    $loggedin = TRUE;
} else $loggedin = FALSE;

?>

<!DOCTYPE html>
<head>
    <title>UTS LAB PEMWEB - 27047 - Soal 4</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>
<style>
    .card-shadow {
        box-shadow: 0 6px 8px 3px rgba(0, 0, 0, 0.3);
        transition: 0.3s;
        border-radius: 10px;
    }

    .card-shadow:hover {
        box-shadow: 0 12px 16px 8px rgba(0, 0, 0, 0.4);
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="#">UShop - Soal 4</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <?php
        $name = $_SESSION['name'];
        $role = $_SESSION['role_name'];
        if ($loggedin) {
            echo <<<_LOGGEDIN
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="las la-user-circle"></i><span style="font-weight: bolder;">Halo, $name ($role)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil.php"><i class="las la-user"></i>Profil Diri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../controller/logout.php"><i class="las la-sign-out-alt"></i>Log Out</a>
            </li>
        </ul>
_LOGGEDIN;
        }
        ?>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
