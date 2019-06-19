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
              <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">No. Transaksi:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Model Sepeda Motor:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value=""></option>
                        <option value="honda" selected>Honda</option>
                        <option value="yamaha">Yamaha</option>
                        <option value="suzuki">Suzuki</option>
                    </select>
                </div> 
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipe Sepeda Motor:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value=""></option>
                        <option value="sport" selected>Sport</option>
                        <option value="matic">Matic</option>
                        <option value="bebek">Bebek</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal Transaksi:</label>
                    <?php 
                        $month = date('m');
                        $day = date('d');
                        $year = date('Y');
                        $today = $year.'-'.$month.'-'.$day;
                    ?>
                    <input type="date" class="form-control" id="exampleFormControlInput1" value="<?php echo $today; ?>" disabled>
                </div> 
              </form>
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