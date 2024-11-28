<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
    <title>Login Admin</title>
</head>
<body>
    <div class="container">
        <h2>Login Admin</h2>

        <?php echo form_open('admin'); ?>
        <div>
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" required><br><br>
        </div>
        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required><br><br>
        </div>
        <div>
            <input type="submit" name="submit" value="Login">
        </div>
        <?php echo form_close(); ?>

        <p>Belum punya akun? <a href="<?php echo base_url('admin-regist'); ?>">Daftar Admin</a></p>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="error-message">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>