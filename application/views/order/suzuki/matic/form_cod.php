<form action="<?php echo base_url() ?>rumah/cod_aksi_tambah" method="post" class="form-row">
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1">No. Transaksi:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="formId_transaksi" value="" required>
    </div> 
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1">Kode Barang:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="formId_barang" value="b0008" readonly>
    </div> 
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1">Tanggal Transaksi:</label>
        <?php 
            $month = date('m');
            $day = date('d');
            $year = date('Y');
            $today = $year.'-'.$month.'-'.$day;
        ?>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="formTgl_transaksi" value="<?php echo $today; ?>" readonly>
    </div>
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1">Tipe Pembayaran:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="formTipe_pembayaran" value="tunai" readonly>
    </div> 
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1">Pilihan Pembayaran:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="formPilihan_pembayaran" value="cod" readonly>
    </div>
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1">Nama:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="formNama_pembeli" placeholder="Nama Pembeli" required>
    </div>
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1">Alamat:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="formAlamat_pembeli" placeholder="Alamat Pembeli" required>
    </div>
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1">No. Telpon:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="formNo_telp" placeholder="No. Telp" required>
    </div>
    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary" id="cari">Beli</button>
    </div>
    
</form>