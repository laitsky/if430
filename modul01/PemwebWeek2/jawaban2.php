<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">[IF635] Web Programming</a>
    <form class="form-inline">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </form>
</nav>
<table id="table" class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Quantity per Unit</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $productName = array(
        "Chai" => array(
            "quantity" => "10 boxes 20 bags",
            "price" => 18.000,
            "stock" => 39
        ),
        "Chang" => array(
            "quantity" => "24 - 12 oz bottles",
            "price" => 19.000,
            "stock" => 17
        ),
        "Aniseed Syrup" => array(
            "quantity" => "12 - 550 ml bottles",
            "price" => 10.000,
            "stock" => 13
        ),
        "Chef Anton's Cajun Seasoning" => array(
            "quantity" => "48 - 6 oz jars",
            "price" => 22.000,
            "stock" => 53
        ),
        "Chef Anton's Gumbo Mix" => array(
            "quantity" => "36 boxes",
            "price" => 21.350,
            "stock" => 0
        ),
        "Grandma's Boysenberry Spread" => array(
            "quantity" => "12 - 8 oz jars",
            "price" => 25.000,
            "stock" => 120
        ),
        "Uncle Bob's Organic Dried Pears" => array(
            "quantity" => "12 - 1 lb pkgs",
            "price" => 30.000,
            "stock" => 15
        ),
        "Northwoods Cranberry Sauce" => array(
            "quantity" => "12- 12 oz jars",
            "price" => 40.000,
            "stock" => 6
        ),
        "Mishi Kobe Niku" => array(
            "quantity" => "18 - 500 g pkgs",
            "price" => 97.000,
            "stock" => 29
        ),
        "Ikura" => array(
            "quantity" => " 12 - 200 ml jars",
            "price" => 31.000,
            "stock" => 31
        )
    );

    foreach ($productName as $key => $n) {
        echo "<tr>";
        echo '<th scope="row">' . (array_search($key, array_keys($productName)) + 1) . '</th>';
        echo "<td>" . $key . "</td>";
        echo "<td>" . $n["quantity"] . "</td>";
        echo "<td>" . $n["price"] . "</td>";
        echo "<td>" . $n["stock"] . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
</body>

