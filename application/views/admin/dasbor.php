<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'application/views/komponen/meta.php'; ?>
    <title>Aplikasi Jual Sepeda Motor | Home</title>
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
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Aplikasi Jual Sepeda Motor</h1>
                <hr>
                <p class="lead">Halo, <br />
                Selamat datang di website Aplikasi Penjualan Sepeda Motor.<br />
                Silahkan pilih menu yang tersedia.</p>
            </div>
        </div>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="<?php echo base_url(); ?>rumah/artikel01"><img src="<?php echo base_url(); ?>asset/gambar/3514449691.jpg" class="d-block w-100" alt="Adu Spek Suzuki Burgman Street 125 vs Yamaha Lexi"></a>
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Adu Spek Suzuki Burgman Street 125 vs Yamaha Lexi</h5>
                    <p>Suzuki Burgman Street 125 hadir di Jakarta Fair Kemayoran (JFK) 2019.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="<?php echo base_url(); ?>rumah/artikel02"><img src="<?php echo base_url(); ?>asset/gambar/4172833805.jpg" class="d-block w-100" alt="Rossi Tak Pasang Target Muluk di GP Catalunya"></a>
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Rossi Tak Pasang Target Muluk di GP Catalunya</h5>
                    <p>MotoGP putaran ketujuh atau GP Catalunya akan digelar akhir pekan ini.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="<?php echo base_url(); ?>rumah/artikel03"><img src="<?php echo base_url(); ?>asset/gambar/2405931936.jpg" class="d-block w-100" alt="Daftar Harga Motor Sport 150 cc Juni 2019"></a>
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Daftar Harga Motor Sport 150 cc Juni 2019</h5>
                    <p>Memasuki pertengahan 2019, segmen sepeda motor sport 150 cc menjadi salah satu pasar yang digemari masyarkat.</p>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
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