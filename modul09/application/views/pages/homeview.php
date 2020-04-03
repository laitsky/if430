<!DOCTYPE html>
<html>
<head>
    <title>Modul 09</title>
    <?php
    echo $js;
    echo $css;
    ?>
</head>
<body>
<?php echo $header; ?>
<div class="container">
    <h1>Northwind Traders</h1>
    <a href="index.php/insert" class="btn btn-primary">Add Product</a><hr>
    <table class="table table-hover" id="myTable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nama Produk</th>
            <th>QTY per Unit</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($product as $row) {
            $id_product = $row['id_product'];
            $product_name = $row['product_name'];
            $qty_per_unit = $row['qty_per_unit'];
            $price = $row['price'];

            echo "<tr>";
            echo "<td>" . $id_product . "</td>";
            echo "<td>" . $product_name . "</td>";
            echo "<td>" . $qty_per_unit . "</td>";
            echo "<td>" . $price . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <?php echo $footer; ?>
</div>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
</body>
</html>
