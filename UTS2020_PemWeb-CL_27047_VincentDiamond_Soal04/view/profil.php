<?php
require_once "../include/header.php";
if (!isset($_SESSION['user_id']))
    echo "<meta http-equiv=\"refresh\" content=\"0;URL='../index.php'\" />";
?>
<div class="container" style="max-width: 600px;">
    <a class="btn btn-block btn-outline-primary mb-3" href="javascript:history.go(-1)"><i
                class="las la-arrow-circle-left"></i>Kembali ke halaman sebelumnya</a>
    <div id="profile-card" class="card-shadow" style="padding: 1.5em;">
        <h2 class="text-center pt-1" style="font-weight: bold;">Profil Diri</h2>
        <section class="pt-3" id="profile">
            <div class="text-center">
                <img class="img-fluid" style="border-radius: 20px; width: 240px; height: 280px; object-fit: cover;"
                     src="../assets/profil_pic.jpg">
                <div class="row py-3">
                    <div class="col-sm-6">
                        NIM
                    </div>
                    <div class="col-sm-6">
                        00000027047
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-sm-6">
                        Nama
                    </div>
                    <div class="col-sm-6">
                        Vincent Diamond
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-sm-6">
                        Angkatan
                    </div>
                    <div class="col-sm-6">
                        Informatika - 2018
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>