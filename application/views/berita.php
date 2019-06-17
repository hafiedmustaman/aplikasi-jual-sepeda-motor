<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'application/views/komponen/meta.php'; ?>
    <title>Aplikasi Jual Sepeda Motor | Berita</title>
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
  <h1>BERITA</h1>
  <hr>
    <ul class="list-unstyled">
      <li class="media">
        <img src="<?php echo base_url(); ?>asset/gambar/3514449691.jpg" width="64px" height="64px" class="mr-3" alt="Adu Spek Suzuki Burgman Street 125 vs Yamaha Lexi">
        <div class="media-body">
          <a href="<?php echo base_url(); ?>rumah/artikel01"><h5 class="mt-0 mb-1">Adu Spek Suzuki Burgman Street 125 vs Yamaha Lexi</h5></a>
          <p align="justify">Burgman Street 125 hadir di Jakarta Fair Kemayoran (JFK) 2019. Sayangnya skutik bongsor terkecil keluarga Burgman tersebut belum dijual dan 
          baru sekadar mejeng untuk tes pasar. Kendati belum akan dijual, kehadirannya merupakan bukti bahwa Suzuki mulai tertarik menghadirkan skutik bongsor ke Indonesia. 
          Menilik kelasnya, jika meluncur maka akan berhadapan dengan Yamaha Lexi.</p>
        </div>
      </li>
      <li class="media">
        <img src="<?php echo base_url(); ?>asset/gambar/4172833805.jpg" width="64px" height="64px" class="mr-3" alt="Rossi Tak Pasang Target Muluk di GP Catalunya">
        <div class="media-body">
          <a href="<?php echo base_url(); ?>rumah/artikel02"><h5 class="mt-0 mb-1">Rossi Tak Pasang Target Muluk di GP Catalunya</h5></a>
          <p align="justify">MotoGP putaran ketujuh atau GP Catalunya akan digelar akhir pekan ini. Valentino Rossi yang kesulitan di GP Italia, tak memasang terget muluk 
          di balapan Spanyol. Bukan hanya terkendala performa motor Yamaha YZR-M1, tetapi juga Sirkuit Catalunya merupakan balapan rumah para pebalap Spanyol, yang pasti 
          tidak akan disia-siakan oleh para "Spaniard."</p>
        </div>
      </li>
      <li class="media">
        <img src="<?php echo base_url(); ?>asset/gambar/2405931936.jpg" width="64px" height="64px" class="mr-3" alt="Daftar Harga Motor Sport 150 cc Juni 2019">
        <div class="media-body">
          <a href="<?php echo base_url(); ?>rumah/artikel03"><h5 class="mt-0 mb-1">Daftar Harga Motor Sport 150 cc Juni 2019</h5></a>
          <p align="justify">Memasuki pertengahan 2019, segmen sepeda motor sport 150 cc menjadi salah satu pasar yang digemari masyarkat. Buktinya, dua merek melakukan 
          penyegaran pada produknya beberapa waktu lalu. Merek pertama, Yamaha yang memberikan model terbaru livery Monster Energy MotoGP pada model R15 dan Vixion akhir 
          Mei lalu. Motor sport andalan Yamaha ini masing-masing dibanderol Rp 36,360 juta dan Rp 27,650 juta.</p>
        </div>
      </li>
    </ul>
  </div>
  <div class="col-md-2">
  </div>
</div>

</main>
<?php include 'application/views/komponen/js.php'; ?>
</body>
</html>