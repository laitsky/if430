<?php
include_once '../include/db_connect.php';
if(isset($_POST['submit'])) {
    $sid = mysqli_real_escape_string($conn, strip_tags($_POST['id']));
    $sname = mysqli_real_escape_string($conn, strip_tags($_POST['name']));
    $snim = mysqli_real_escape_string($conn, strip_tags($_POST['nim']));
    $sangkatan = mysqli_real_escape_string($conn, strip_tags($_POST['angkatan']));
    $sjurusan = mysqli_real_escape_string($conn, strip_tags($_POST['jurusan']));
    $query = 'INSERT INTO siswa VALUES("'.$sid.'", "'.$sname.'", "'.$snim.'","'.$sangkatan.'", "'.$sjurusan.'");';
    $result = $conn->query($query);
}
