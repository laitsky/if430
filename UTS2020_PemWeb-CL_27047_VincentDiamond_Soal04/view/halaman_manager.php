<?php
include_once "../include/header.php";
include_once "../model/Item.php";
setlocale(LC_MONETARY, id_ID);
?>
<div class="container">
    <h6>Halo User ID <?php echo $_SESSION['user_id']; ?>, kamu masuk sebagai <span style="font-weight: bold; text-decoration: underline"><?php echo $_SESSION['role_name']; ?></span></h6>
    <h2 class="text-center" style="font-weight: bold">Manager Page UShop</h2>
    <div>
        <?php
        if (isset($_SESSION['error'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                Update/tambah barang gagal. Stok dan harga barang harus di atas 0!
            </div>
        <?php } ?>
    </div>
    <div>
        <?php
        if (isset($_SESSION['success'])) {
            ?>
            <div class="alert alert-success" role="alert">
                Update/hapus barang berhasil!
            </div>
        <?php } ?>
    </div>
    <div>
        <?php
        if (isset($_SESSION['success-add'])) {
            ?>
            <div class="alert alert-primary" role="alert">
                Tambah barang berhasil!
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
        <div class="text-right">
            <a href="tambah_item_view.php" class="btn btn-primary mb-3"><i class="las la-plus-circle"></i>Tambah Barang Baru</a>
        </div>
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
                    <td class="align-middle text-center"><a href="item_details_manager.php?item_id=<?php echo $row->get_id(); ?>"
                                                class="btn btn-success mr-2" style="color: white;"><i class="las la-eye"></i>Lihat</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#deleteItem-<?php echo $row->get_id(); ?>">
                            <i class="las la-ban"></i>Hapus
                        </button>
                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteItem-<?php echo $row->get_id(); ?>" tabindex="-1"
                             role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="font-weight: bolder;">Hapus Barang</h5>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <h6>Apakah kamu yakin ingin menghapus <span
                                                    style="font-weight: bold"><?php echo $row->get_name(); ?></span>?
                                        </h6>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                                            Tutup
                                        </button>
                                        <a href="../controller/hapus_item.php?item_id=<?php echo $row->get_id(); ?>"
                                           class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>
<?php
unset($_SESSION['error']);
unset($_SESSION['success']);
unset($_SESSION['success-add']);
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
