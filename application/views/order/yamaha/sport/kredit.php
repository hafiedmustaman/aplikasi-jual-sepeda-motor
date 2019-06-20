<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'application/views/komponen/meta.php'; ?>
    <title>Aplikasi Jual Sepeda Motor | Pemesanan</title>
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
            <h2>Form Pemesanan</h2>
            <hr>
            <div class="col-sm">
            </div>
            <div class="col-sm">
            <h5>Skema Agen Kredit:</h5>

            <table class="table table-hover table-dark">
                <tr>
                    <thead>
                        <th>ID Kredit</th>
                        <th>Nama Agen</th>
                        <th>Uang Muka</th>
                        <th>Angsuran</th>
                        <th>Cicilan</th>
                    </thead>
                </tr>
                <?php
                    foreach($data as $row)  :
                ?>
                <tr>
                    <tbody>
                        <td><?php echo $row['id_kredit']; ?></td>
                        <td><?php echo strtoupper($row['nama_agen']); ?></td>
                        <td align="right">Rp. <?php echo number_format($row['uang_muka'],0,",","."); ?></td>
                        <td align="right"><?php echo $row['angsuran']; ?></td>
                        <td align="right">Rp. <?php echo number_format($row['cicilan'],0,",","."); ?></td>
                    </tbody>
                </tr>
                    <?php endforeach; ?>
            </table>

            <?php include 'application/views/order/yamaha/sport/form_kredit.php'; ?>
            </div>
            <div class="col-sm">
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>

</main>
<?php include 'application/views/komponen/js.php'; ?>
</body>
</html>