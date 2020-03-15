<?php
include_once "../include/header.php";
include_once "../model/Item.php";
setlocale(LC_MONETARY, id_ID);
?>
<div class="container">
    <h6>Halo User ID <?php echo $_SESSION['user_id']; ?>, kamu masuk sebagai <span style="font-weight: bold; text-decoration: underline"><?php echo $_SESSION['role_name']; ?></span></h6>
    <h2 class="text-center" style="font-weight: bold">Customer Page UShop</h2>
    <?php
    $item_res = sql_query("SELECT * FROM item");
    $itemsArray = array();
    while ($row = mysqli_fetch_array($item_res)) {
        array_push($itemsArray, new Item($row['item_id'], $row['item_name'], $row['item_stock'], $row['item_price'], $row['item_desc']));
    }
    ?>
    <div class="row">
        <?php foreach ($itemsArray as $row) { ?>
            <div class="card-deck col-sm-4 mb-3 ml-auto mr-auto">
                <div class="card border-dark">
                    <div class="card-body">
                        <div class="card-title">
                            <h6 style="font-weight: bold;"><?php echo $row->get_name(); ?></h6>
                        </div>
                        <p class="card-text"><?php echo money_format("Rp%i", $row->get_price()); ?></p>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="card-text" style="font-style: italic;"><?php echo $row->get_status(); ?></p>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn btn-primary"
                                   href="item_details_pembeli.php?item_id=<?php echo $row->get_id(); ?>"><i class="las la-eye"></i>Lihat
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
