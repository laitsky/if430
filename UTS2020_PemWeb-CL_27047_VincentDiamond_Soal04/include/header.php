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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="#">UTS PemWeb Soal 4</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <?php
        if ($loggedin) {
            echo <<<_LOGGEDIN
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Profil Diri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../controller/logout.php">Log Out</a>
            </li>
        </ul>
_LOGGEDIN;
        }
        ?>
    </div>
</nav>
