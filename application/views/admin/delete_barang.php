<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalDelete<?php echo $baris->id_barang; ?>">
<i class="fas fa-minus-circle"></i> Delete
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalDelete<?php echo $baris->id_barang; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalTitle"><i class="fas fa-minus-circle"></i> Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="col-md-12" style="overflow: auto;">
            <i class="fas fa-exclamation-triangle"></i> Apakah anda yakin bahwa data dengan id_barang: <?php echo $baris->id_barang; ?> ingin dihapus?
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a href="<?php echo base_url() ?>admin/delete_barang/<?php echo $baris->id_barang; ?>" class="btn btn-danger">Delete</a>
        </div>
    </div>
  </div>
</div>
