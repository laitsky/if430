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
    <form action="tambah_mhs.php" method="post" style="max-width: 30vw">
        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input type="text" class="form-control" placeholder="Student ID" id="student_id" name="student_id">
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name">
        </div>
        <div class="form-group">
            <label for="stud_desc">Description</label>
            <textarea class="form-control" placeholder="Description" id="stud_desc" name="stud_desc"
                      rows="5"></textarea>
        </div>
        <div>
            <button class="btn btn-primary" name="submit">Submit</button>
            <button type="button" class="btn" onclick="window.location.href='tabel_mahasiswa.php'">Cancel</button>
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $student_id = $_POST['student_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $stud_desc = $_POST['stud_desc'];
        include_once "include/db_config.php";
        $query = "INSERT INTO `data_mhs` VALUES (NULL, '$student_id', '$first_name', '$last_name', '$stud_desc')";
        $result = $conn->query($query);
        if ($result) {
            header("Location:tabel_mahasiswa.php");
        } else {
            die("Tambah mahasiswa gagal!");
        }
    }

    ?>

</div>
</body>
</html>
