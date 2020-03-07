<?php
include_once "include/db_config.php";

$id = $_GET['id'];
$query = "DELETE FROM `data_mhs` WHERE id='$id'";
$result = $conn->query($query);
header("Location:tabel_mahasiswa.php");
