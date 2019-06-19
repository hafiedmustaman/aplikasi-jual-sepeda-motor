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
            <div class="col-sm text-center">
              <img src="<?php echo base_url() ?>asset/gambar/katalog/honda/bebek.png" 
              width="400px" height="400px" class="img-fluid rounded" alt="bebek">
            </div>
            <div class="col-sm">
              <table class="table table-bordered" align="center">
                <tr>
                    <th>Model</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($data as $row) :
                ?>
                <tr>
                    <td><?php echo strtoupper($row['model']); ?></td>
                    <td><?php echo strtoupper($row['tipe']); ?></td>
                    <td align="right">Rp. <?php echo number_format($row['harga'], 0, ",", "."); ?></td>
                    <td align="center"><?php include 'application/views/katalog/honda_bebek_modal.php'; ?></td>
                </tr>
                    <?php endforeach; ?>
              </table>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>

</main>
<?php include 'application/views/komponen/js.php'; ?>
</body>
</html>