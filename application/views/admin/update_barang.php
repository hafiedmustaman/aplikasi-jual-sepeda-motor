<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalEdit<?php echo $baris->id_barang; ?>">
<i class="fas fa-edit"></i> Edit
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalEdit<?php echo $baris->id_barang; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="<?php echo base_url() ?>admin/aksi_edit_barang" method="post">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-users"></i> Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <div class="form-group col-md">
            <label for="exampleFormControlInput1">id_barang:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="formId_barang" value="<?php echo $baris->id_barang; ?>" required>
            </div>
            <div class="form-group col-md">
            <label for="exampleFormControlInput1">model:</label>
            <select class="form-control" id="idModel" name="formModel" required>
                <option></option>
                <option value="honda" <?php if($baris->model == 'honda') echo 'selected'; ?>>honda</option>
                <option value="yamaha" <?php if($baris->model == 'yamaha') echo 'selected'; ?>>yamaha</option>
                <option value="suzuki" <?php if($baris->model == 'suzuki') echo 'selected'; ?>>suzuki</option>
            </select>
            </div>
            <div class="form-group col-md">
            <label for="exampleFormControlInput1">tipe:</label>
            <select class="form-control" id="idModel" name="formTipe" required>
                <option></option>
                <option value="sport" <?php if($baris->tipe == 'sport') echo 'selected'; ?>>sport</option>
                <option value="matic" <?php if($baris->tipe == 'matic') echo 'selected'; ?>>matic</option>
                <option value="bebek" <?php if($baris->tipe == 'bebek') echo 'selected'; ?>>bebek</option>
            </select>
            </div>
            <div class="form-group col-md">
            <label for="exampleFormControlInput1">harga:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="formHarga" value="<?php echo $baris->harga; ?>" required>
            </div>
            <div class="form-group col-md">
            <label for="exampleFormControlInput1">stok:</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="formStok" value="<?php echo $baris->stok; ?>" required>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> Update</button>
        </div>
        </form>
    </div>
    </div>
</div>
