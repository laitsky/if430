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
<?php
include_once("db_config.php");
$id = $_GET['id'];


$query = "SELECT * FROM `data_mhs` WHERE id='$id'";
$result = $conn->query($query);

while ($row = $result->fetch()) {
    $student_id = $row['student_id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $stud_desc = $row['stud_desc'];
}


$query = "UPDATE data_mhs SET student_id='$student_id', first_name='$first_name', last_name='$last_name', stud_desc='$stud_desc'";
?>
<div class="container">
    <form action="edit_mhs.php" method="post" style="max-width: 30vw;">
        <div class="form-group">
            <label for="student_id">Student ID <?php echo $student_id ?></label>
            <input type="text" class="form-control" placeholder="Student ID" id="student_id" name="student_id"
                   value=<?php echo $student_id ?>>
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name"
                   value=<?php echo $first_name ?>>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name"
                   value=<?php echo $last_name ?>>
        </div>
        <div class="form-group">
            <label for="stud_desc">Description</label>
            <textarea class="form-control" placeholder="Description" id="stud_desc" name="stud_desc"
                      rows="5"><?php echo $stud_desc ?></textarea>
        </div>
        <input type="text" hidden name="id" value=<?php echo $id ?>
        <div>
        <button class="btn btn-primary" name="submit">Edit</button>
        <button type="button" class="btn" onclick="window.location.href='tabel_mahasiswa.php'">Cancel</button>
</div>
</form>
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $student_id = $_POST['student_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $stud_desc = $_POST['stud_desc'];
    $query = "UPDATE `data_mhs` SET student_id='$student_id', first_name='$first_name', last_name='$last_name', stud_desc='$stud_desc' WHERE id='$id'";
    $result = $conn->query($query);
    if ($result) {
        header("Location:tabel_mahasiswa.php");
    } else {
        die("Update mahasiswa gagal!");
    }
}
?>
</div>
</body>
</html>
