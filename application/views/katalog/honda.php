<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'application/views/komponen/meta.php'; ?>
    <title>Aplikasi Jual Sepeda Motor | Katalog</title>
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
            <h2>HONDA</h2>
            <hr>
            <div class="row">
                <div class="col-sm text-center">
                    <a href="#"><img src="<?php echo base_url() ?>asset/gambar/katalog/honda/sport.png" 
                    width="200px" height="200px" class="img-fluid rounded" alt="SPORT"><b>SPORT</b></a>
                </div>
                <div class="col-sm text-center">
                    <a href="#"><img src="<?php echo base_url() ?>asset/gambar/katalog/honda/matic.png" 
                    width="200px" height="200px" class="img-fluid rounded" alt="MATIC"><b>MATIC</b></a>
                </div>
                <div class="col-sm text-center">
                    <a href="#"><img src="<?php echo base_url() ?>asset/gambar/katalog/honda/bebek.png" 
                    width="200px" height="200px" class="img-fluid rounded" alt="BEBEK"><b>BEBEK</b></a>
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