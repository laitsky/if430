<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['email']))
    header("Location: login_page.php");

?>
<html>
<head>
    <title> Tugas Pendahuluan</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="container">
    <header>
        <nav class="navbar navbar-dark bg-primary mb-3">
            <div class="container">
                <div class="navbar-header">
                    <h4 style="color: white;"> [IF635] Web Programming </h4>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <form method="post" action="logout.php">
                        <button class="btn btn-danger" >Logout</button>
                    </form>
                </ul>
            </div>
        </nav>
    </header>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <button onclick="window.location.href='tambah_mhs.php'" class="btn btn-primary" style="float: right">Tambah
                Mahasiswa
            </button>
        </div>
    </div>
    <table class="table" id="example">
        <thead>
        <tr>
            <th>#</th>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include_once "../include/db_config.php";
        include_once "../model/student_model.php";
        $query = "SELECT * FROM `data_mhs`";
        $result = $conn->query($query);
        $mahasiswa = array();
        while ($row = $result->fetch()) {
            array_push($mahasiswa, new Student($row['id'], $row['student_id'], $row['first_name'], $row['last_name']));
        }
        foreach ($mahasiswa as $row)
        {
            echo "<tr>";
            echo "<td>".$row->get_id()."</td>";
            echo "<td>".$row->get_student_id()."</td>";
            echo "<td>".$row->get_first_name()."</td>";
            echo "<td>".$row->get_last_name()."</td>";
            echo "<td><a href='hapus_mhs.php?id=$row->get_id() '>Hapus</a> | <a href='edit_mhs.php?id=$row->get_id()'>Edit</a> </td>";
            echo "</tr>";
        }

        ?>
        </tbody>
    </table>
</div>
</body>
</html>
