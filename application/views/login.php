<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'application/views/komponen/meta.php'; ?>
    <title>Aplikasi Jual Sepeda Motor | Login</title>
<?php include 'application/views/komponen/css.php'; ?>
<?php include 'application/views/komponen/js_head.php'; ?>
</head>
<body>
<?php include 'application/views/komponen/navbar.php'; ?>
<main class="container">
    
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <h2>LOGIN</h2>
            <hr>
            <div class="row">
                <div class="col-sm">
                <?php
				//echo validation_errors();
                    echo $this->session->flashdata('pesan_gagal');
                    echo $this->session->flashdata('pesan_keluar');
                    echo $this->session->flashdata('belum_login');
                ?>
                </div>
                <div class="col-sm">
                <?php echo form_open('login/cek_login');?>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" class="form-control" name="formUsername" id="exampleInputEmail1" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="formPassword" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Submit</button>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>

</main>
<?php include 'application/views/komponen/js.php'; ?>
</body>
</html>