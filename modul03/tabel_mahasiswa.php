<!DOCTYPE html>
<html>
<head>
    <title> Tugas Pendahuluan</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <header>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <h4 style="color:grey"> [IF635] Web Programming </h4>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-right active"><a href="#">Student</a></li>
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
        include_once("db_config.php");
        $query = "SELECT * FROM `data_mhs`";
        $result = $conn->query($query);
        while ($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['student_id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td><a href='hapus_mhs.php?id=$row[id] '>Hapus</a> | <a href='edit_mhs.php?id=$row[id]'>Edit</a> </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    })
</script>
</body>
</html>
