<!DOCTYPE html>
<html>
<head>
    <title> Tugas Pendahuluan</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <style>
        td.details-control {
            background: url('details_open.png') no-repeat center center;
            cursor: pointer;
        }
        tr.shown td.details-control {
            background: url('details_close.png') no-repeat center center;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <h4 style="color:grey"> [IF635] Web Programming </h4>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-right active"><a href="#"> Employees</a></li>
                </ul>
            </div>
        </nav>
    </header>
</div> <!--header div EOL -->

<div class="container">
    <table class="table" id="example">
        <thead>
        <tr>
            <th></th>
            <th>Last Name</th>
            <th>Title</th>
            <th>Extension</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $dbname = "northwind";
        $host = "localhost";
        $username = "root";
        $password = "";

        $dsn = "mysql:host=$host;dbname=$dbname";
        try {
            $conn = new PDO($dsn, $username, $password);
            if ($conn) {
                echo "Connected to the <strong>$dbname</strong> database successfully!";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $query = "SELECT * FROM `employees`";
        $result = $conn->query($query);
        while ($row = $result->fetch()) {
            $firstName = $row['FirstName'];
            $lastName = $row['LastName'];
            $birthDate = json_encode($row['BirthDate']);
            $address = json_encode($row['Address']);
            $city = json_encode($row['City']);
            $homePhone = json_encode($row['HomePhone']);
            echo "<tr data-child-firstname=$firstName data-child-lastname=$lastName data-child-birthdate=$birthDate data-child-address=$address 
                    data-child-city=$city data-child-homephone=$homePhone>";
            echo "<td class='details-control'></td>";
            echo "<td>" . $row['LastName']  . " ". "</td>";
            echo "<td>" . $row['Title'] . "</td>";
            echo "<td>" . $row['Extension'] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script>
  function format(firstname, lastname, birthdate, address, city, homephone) {
      return '<div>Full Name: ' + firstname + " " + lastname + '</div>' + '<div>Birth Date: ' + birthdate + '</div>' + 
      '<div>Address: ' + address + '</div>' + '<div>City: ' + city + '</div>' + '<div>Home Phone: ' + homephone + '</div>';
  }
  $(document).ready(function () {
      var table = $('#example').DataTable({});

      // Add event listener for opening and closing details
      $('#example').on('click', 'td.details-control', function () {
          var tr = $(this).closest('tr');
          var row = table.row(tr);

          if (row.child.isShown()) {
              // This row is already open - close it
              row.child.hide();
              tr.removeClass('shown');
          } else {
              // Open this row
              row.child(format(tr.data('child-firstname'), tr.data('child-lastname'), tr.data('child-birthdate'), tr.data('child-address'),
              tr.data('child-city'), tr.data('child-homephone'))).show();
              tr.addClass('shown');
          }
      });
  });
</script>
</body>
</html>