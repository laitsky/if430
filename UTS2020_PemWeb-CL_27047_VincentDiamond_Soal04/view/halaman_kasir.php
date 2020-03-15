<?php
include_once "../include/header.php";
include_once "../model/Item.php";
setlocale(LC_MONETARY, id_ID);
?>
<div class="container">
    <h6>Halo User ID <?php echo $_SESSION['user_id']; ?>, kamu masuk sebagai <span style="font-weight: bold; text-decoration: underline"><?php echo $_SESSION['role_name']; ?></span></h6>
    <h2 class="text-center" style="font-weight: bold">Cashier Page UShop</h2>
    <div>
        <?php
        if(isset($_SESSION['error'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                Update barang gagal. Stok dan harga barang harus di atas 0!
            </div>
        <?php } ?>
    </div>
    <div>
        <?php
        if(isset($_SESSION['success'])) {
            ?>
            <div class="alert alert-success" role="alert">
                Update barang berhasil!
            </div>
        <?php } ?>
    </div>
    <?php
    $item_res = sql_query("SELECT * FROM item");
    $itemsArray = array();
    while ($row = mysqli_fetch_array($item_res)) {
        array_push($itemsArray, new Item($row['item_id'], $row['item_name'], $row['item_stock'], $row['item_price'], $row['item_desc']));
    }
    ?>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col" class="text-center">ID Barang</th>
                <th scope="col" class="text-center">Nama Barang</th>
                <th scope="col" class="text-center">Stock</th>
                <th scope="col" class="text-center">Harga Barang</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($itemsArray as $row) {
                ?>
                <tr>
                    <th class="align-middle text-center" scope="row"><?php echo $row->get_id(); ?></th>
                    <td class="align-middle text-center"><?php echo $row->get_name(); ?></td>
                    <td class="align-middle text-center"><?php echo $row->get_stock(); ?></td>
                    <td class="align-middle text-center"><?php echo money_format("Rp%i", $row->get_price()) ?></td>
                    <td class="align-middle text-center"><a href="item_details_kasir.php?item_id=<?php echo $row->get_id(); ?>"
                                                class="btn btn-success" style="color: white;"><i class="las la-eye"></i>Lihat</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
unset($_SESSION['error']);
unset($_SESSION['success']);
?>
