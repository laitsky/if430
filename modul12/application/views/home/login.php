<div class="container pt-5" style="max-width: 480px;">
    <?= form_open('home') ?>
    <h1 class="text-center">Login</h1><hr>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" class="form-control">
        <small class="text-danger"><?= form_error('email'); ?></small>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control">
        <small class="text-danger"><?= form_error('password'); ?></small>
    </div>
    <button class="btn btn-success btn-block">Submit</button>
    <?= form_close(); ?>
    <?= $this->session->flashdata('message'); ?>
</div>