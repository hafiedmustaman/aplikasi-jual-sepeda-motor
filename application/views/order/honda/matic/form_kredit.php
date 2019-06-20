<form action="<?php echo base_url() ?>rumah/kredit_aksi_tambah" method="post" class="form-row">
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1">No. Transaksi:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="formId_transaksi" value="" required>
    </div> 
    <div class="form-group col-md-6">
        <label for="exampleFormControlSelect1">ID Kredit</label>
        <select class="form-control" name="formId_kredit" id="exampleFormControlSelect1" required>
            <option></option>
            <option value="k0004">k0004</option>
            <option value="k0005">k0005</option>
            <option value="k0006">k0006</option>
            <option value="k0031">k0031</option>
            <option value="k0032">k0032</option>
            <option value="k0033">k0033</option>
    </select>
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