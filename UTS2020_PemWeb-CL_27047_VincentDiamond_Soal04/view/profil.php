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
                <img class="img-fluid pb-2" style="border-radius: 20px; width: 240px; height: 280px; object-fit: cover;"
                     src="../assets/profil_pic.jpg">
                <div class="row mt-3 py-3">
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
                <div class="row py-3">
                    <div class="col-sm-6">
                        Kelas
                    </div>
                    <div class="col-sm-6">
                        CL
                    </div>
                </div>
                <section id="reference" class="text-center">
                    <h3 class="py-2" style="font-weight: bold;">Referensi</h3>
                    <ul>
                        <li><i>Learning PHP, MySQL, JavaScript, CSS & HTML5: A Step-by-Step Guide to Creating Dynamic Websites, 3rd Edition.</i> oleh Robin Nixon. <a href="https://www.amazon.com/Learning-MySQL-JavaScript-HTML5-Step/dp/1491949465">(Link Amazon)</a> </li>
                        <li>Modul Pembelajaran Teori dan Praktikum <i><strong>IF430 - Pemrograman Web</strong></i> Universitas Multimedia Nusantara</li>
                        <li><a href="https://icons8.com/line-awesome">Line Awesome (Icon Pack)</a> </li>
                        <li><a href="https://stackoverflow.com/questions/28059086/bootstrap-modal-only-shows-the-first-item">Bootstrap modal only hanya menampilkan item pertama</a> </li>
                        <li><a href="https://stackoverflow.com/questions/29115451/display-foreach-loop-variable-value-in-bootstrap-model-in-php">Menampilkan nilai variable loop foreach dalam Bootstrap modal</a> </li>
                        <li><a href="https://stackoverflow.com/questions/53545714/multiple-bootstrap-modals-only-the-first-opens">Modal Boostrap majemuk tetapi hanya hasil pertama yang muncul</a> </li>
                        <li><a href="https://www.w3schools.com/php/php_mysql_delete.asp">Operasi MySQL DELETE</a> </li>
                        <li><a href="https://stackoverflow.com/questions/3662412/are-elseif-and-else-if-completely-synonymous">Perbandingan elseif dan else if di PHP</a> </li>
                        <li><a href="https://stackoverflow.com/questions/26115063/redirect-doesnt-work-for-codeplex-from-000webhost-com">Header tidak bekerja di 000webhost.com</a> </li>
                        <li><a href="https://stackoverflow.com/questions/2548566/go-back-to-previous-page">Kembali ke halaman sebelumnya tanpa menentukan path pasti</a> </li>
                        <li><a href="https://stackoverflow.com/questions/42252443/vertical-align-center-in-bootstrap-4">Penjajaran vertikal/vertical aligning</a> </li>
                        <li><a href="https://getbootstrap.com/docs/4.4/content/tables/">Bootstrap 4.x tables</a> </li>
                        <li><a href="https://www.w3schools.com/php/func_string_money_format.asp">Fungsi money_format() di PHP</a> </li>
                        <li><a href="https://getbootstrap.com/docs/4.4/components/modal/">Komponen modal di Bootstrap 4.x</a> </li>
                        <li><a href="https://www.w3schools.com/tags/tag_textarea.asp">Tentang textarea</a> </li>
                        <li><a href="https://stackoverflow.com/questions/2906582/how-to-create-an-html-button-that-acts-like-a-link">Cara membuat button yang dapat bekerja seperti tag anchor</a> </li>
                        <li><a href="https://getbootstrap.com/docs/4.0/components/forms/">Komponen formulir di Bootstrap 4.x</a> </li>
                        <li><a href="https://getbootstrap.com/docs/4.0/components/card/">Komponen kartu di Bootstrap 4.x</a> </li>
                        <li><a href="https://www.w3schools.com/howto/howto_css_cards.asp">CSS Cards</a> </li>
                    </ul>
                </section>
            </div>
        </section>
    </div>
</div>
