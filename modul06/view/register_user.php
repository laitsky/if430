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
    <h1 class="text-center">Register User</h1>
    <form method="post" action="../index.php">
        <div class="form-group row">
            <label class="col-sm-3" for="username">Username:</label>
            <div class="col-sm-6"><input class="form-control" type="text" name="username"></div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="salt">Salt:</label>
            <div class="col-sm-6"><input class="form-control" type="text" name="salt"></div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="password">Password:</label>
            <div class="col-sm-6"><input class="form-control" type="password" name="password"></div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="passconf">Re-type Password:</label>
            <div class="col-sm-6"><input class="form-control" type="password" name="passconf"></div>
        </div>
        <input type="hidden" name="do" value="insert_user.php">
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
        <button type="submit" name="loc" value="student_data.php" class="btn btn-default">Cancel</button>
    </form>
</div>
<script src="../assets/jquery-3.2.1.min.js"></script>
<script src="../assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>
