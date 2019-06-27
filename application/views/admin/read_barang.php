<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'application/views/komponen/meta.php'; ?>
    <title>Aplikasi Jual Sepeda Motor | Table</title>
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
    <h1>Table: barang</h1>
    <hr>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
    <?php include 'application/views/admin/create_barang.php'; ?><br />
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>NO.</th>
                        <th>id_barang</th>
                        <th>model</th>
                        <th>tipe</th>
                        <th>harga</th>
                        <th>stok</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = $this->uri->segment('3') + 1;
                    foreach($barang as $baris){
                    ?>
                    <tr>
                        <td align="right"><?php echo $no++; ?></td>
                        <td><?php echo $baris->id_barang ?></td>
                        <td><?php echo $baris->model ?></td>
                        <td><?php echo $baris->tipe ?></td>
                        <td><?php echo $baris->harga ?></td>
                        <td><?php echo $baris->stok ?></td>
                        <td>
                            <?php include 'application/views/admin/update_barang.php'; ?>
                            <?php include 'application/views/admin/delete_barang.php'; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <strong><?php echo number_format($this->barang_model->jumlah_data_barang(),0,",","."); ?></strong> record(s) yang ditampilkan.
    </div>
    <div class="col-md-8">
        <?php echo $this->pagination->create_links(); ?>        
    </div>
    <div class="col-md-2">
        Page rendered in <strong>{elapsed_time}</strong> seconds.
    </div>
</div>

</main>
<?php include 'application/views/komponen/js.php'; ?>
</body>
</html>