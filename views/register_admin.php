<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
    <title>Register Admin</title>
</head>
<body>
    <div class="container">
        <h2>Register Admin</h2>

        <?php echo form_open('admin-regist'); ?>
        <div>
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" required><br><br>
        </div>
        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required><br><br>
        </div>
        <div>
            <label for="password_confirm">Konfirmasi Password</label><br>
            <input type="password" name="password_confirm" id="password_confirm" required><br><br>
        </div>
        <div>
            <input type="submit" name="submit" value="Daftar">
        </div>
        <?php echo form_close(); ?>

        <p>Sudah punya akun? <a href="<?php echo base_url('admin'); ?>">Login Admin</a></p>
    </div>
</body>
</html>