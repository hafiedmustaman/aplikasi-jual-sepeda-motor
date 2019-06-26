<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'application/views/komponen/meta.php'; ?>
    <title>Aplikasi Jual Sepeda Motor | Tentang</title>
<?php include 'application/views/komponen/css.php'; ?>
<?php include 'application/views/komponen/js_head.php'; ?>
</head>
<body>
<?php
	if ($this->session->userdata('level') == 'administrator') {
		include 'application/views/admin/komponen/navbar.php'; //navbar
	}
	elseif ($this->session->userdata('level') !== 'administrator') {
		include 'application/views/komponen/navbar.php'; //navbar
	}
?>
<main class="container">
    
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <h2>TENTANG KAMI</h2>
            <hr>
            <h3>Kelompok 2</h3>
            <ol>
                <li>Muhammad Faiz Alrinurizzah (1461700133)</li>
                <li>Hafied Mustaman (1461700138)</li>
                <li>Moch. Riyan Saputra (1461600038)</li>
            </ol>
        </div>
        <div class="col-md-2">
        </div>
    </div>

</main>
<?php include 'application/views/komponen/js.php'; ?>
</body>
</html>