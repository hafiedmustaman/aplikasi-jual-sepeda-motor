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
            <h5>Pilihan Pembayaran:</h5>
            <table border=1>
    <tr>
        <thead>
            <th>id_pelanggan</th>
            <th>nama</th>
            <th>email</th>
            <th>id_transaksi</th>
            <th>id_pelanggan</th>
            <th>tgl_transaksi</th>
            <th>total_transaksi</th>
        </thead>
    </tr>
    <?php
        foreach($data as $row)  :
    ?>
    <tr>
        <tbody>
            <td><?php echo $row['id_pelanggan']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['id_transaksi']; ?></td>
            <td><?php echo $row['id_pelanggan']; ?></td>
            <td><?php echo $row['tgl_transaksi']; ?></td>
            <td><?php echo $row['total_transaksi']; ?></td>
        </tbody>
    </tr>
        <?php endforeach; ?>
</table>

            <?php include 'application/views/order/honda/sport/form_kredit.php'; ?>
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