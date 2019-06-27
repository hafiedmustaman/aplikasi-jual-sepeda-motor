<form action="<?php echo base_url() ?>admin/create_barang" method="post">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalInput">
<i class="fas fa-plus-square"></i> Create
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalInput" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Create</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="form-group col-md">
            <label for="exampleFormControlInput1">id_barang:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="formId_barang" value="" required>
            </div>
            <div class="form-group col-md">
            <label for="exampleFormControlInput1">model:</label>
            <select class="form-control" id="idModel" name="formModel" required>
                <option></option>
                <option value="honda">honda</option>
                <option value="yamaha">yamaha</option>
                <option value="suzuki">suzuki</option>
            </select>
            </div>
            <div class="form-group col-md">
            <label for="exampleFormControlInput1">tipe:</label>
            <select class="form-control" id="idModel" name="formTipe" required>
                <option></option>
                <option value="sport">sport</option>
                <option value="matic">matic</option>
                <option value="bebek">bebek</option>
            </select>
            </div>
            <div class="form-group col-md">
            <label for="exampleFormControlInput1">harga:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="formHarga" required>
            </div>
            <div class="form-group col-md">
            <label for="exampleFormControlInput1">stok:</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="formStok" required>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
</div>
</form>
