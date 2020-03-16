<?php
session_start();
include_once "../include/header.php";
include_once "../model/User.php";
if (!isset($_SESSION['user_id']))
    echo "<meta http-equiv=\"refresh\" content=\"0;URL='../index.php'\" />";
?>
<div class="container">
    <h2 class="text-center" style="font-weight: bold">Admin Page UShop</h2>
    <?php
    if (isset($_SESSION['error'])) {
        ?>
        <div class="alert alert-danger" role="alert">
            Update/tambah user gagal!
        </div>
    <?php } ?>

    <div>
        <?php
        if (isset($_SESSION['success'])) {
            ?>
            <div class="alert alert-success" role="alert">
                Update/hapus user berhasil!
            </div>
        <?php } ?>
    </div>
    <div>
        <?php
        if (isset($_SESSION['success-add'])) {
            ?>
            <div class="alert alert-primary" role="alert">
                Tambah user berhasil!
            </div>
        <?php } ?>
    </div>
    <?php
    $user_res = sql_query("SELECT * FROM `user` ORDER BY `user_id`");
    $usersArray = array();
    while ($row = mysqli_fetch_array($user_res)) {
        array_push($usersArray, new User($row['user_id'], $row['first_name'], $row['last_name'], $row['role_id'], $row['address']));
    }
    ?>
    <div class="table-responsive">
        <div class="text-right">
            <a href="tambah_user_view.php" class="btn btn-primary mb-3"><i class="las la-plus-circle"></i>Tambah User
                Baru</a>
        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Nama</th>
                <th scope="col" class="text-center">Role</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($usersArray as $row) {
                ?>
                <tr>
                    <th class="align-middle text-center" scope="row"><?php echo $row->get_user_id(); ?></th>
                    <td class="align-middle text-center"><?php echo $row->get_name(); ?></td>
                    <td class="align-middle text-center"><?php echo $row->get_role_name(); ?></td>
                    <td class="align-middle text-center"><a
                                href="user_details.php?user_id=<?php echo $row->get_user_id(); ?>"
                                class="btn btn-success mr-2" style="color: white;"><i class="las la-eye"></i>Lihat</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#deleteUser-<?php echo $row->get_user_id(); ?>"><i
                                    class="las la-user-slash"></i>Hapus
                        </button>
                    </td>
                </tr>
                <!-- Delete User Modal -->
                <div class="modal fade" id="deleteUser-<?php echo $row->get_user_id(); ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Hapus User</h5>
                            </div>
                            <div class="modal-body">
                                <h6>Apakah kamu yakin ingin menghapus <span
                                            style="font-weight: bolder;"><?php echo $row->get_name(); ?></span>?</h6>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="../controller/hapus_user.php?user_id=<?php echo $row->get_user_id(); ?>"
                                   class="btn btn-danger">Hapus!</a>
                            </div>
                        </div>
                    </div>
                </div>
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
