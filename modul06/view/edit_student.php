<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" href="#">[IF635] Web Programming</a></div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">Students</a></li>
            </ul>
        </div>
    </nav>
    <h1 class="text-center">Update Student</h1>
    <?php
    include_once '../include/db_connect.php';
    if (!isset($_POST['submit']) || !isset($_POST['student_id']))
        header("Location: ../index.php");
    $student_id = mysqli_real_escape_string($conn, strip_tags($_POST['student_id']));
    $query = "SELECT * FROM siswa WHERE Student_Id" . $student_id . '";"';
    $result = $conn->query($query);
    if (!$result)
        header("Location: ../index.php");
    $row = $result->fetch_assoc();
    ?>
    <form method="post" action="../index.php">
        <div class="form-group row">
            <label class="col-sm-3" for="id">Student ID:</label>
            <div class="col-sm-6"><input class="form-control" type="hidden" name="id"
                                         value='<?php echo $row['Student_Id']; ?>'></div>
        </div>
    </form>
</div>
</body>
</html>
