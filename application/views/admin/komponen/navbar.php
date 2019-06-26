<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand" href="<?php echo base_url() ?>admin"><i class="fas fa-motorcycle"></i> PT. XYZ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-table"></i> Tabel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>rumah/honda">barang</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>rumah/yamaha">kredit</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>rumah/suzuki">trans_kredit</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>rumah/suzuki">trans_tunai</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url() ?>rumah/suzuki">user</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/tentang"><i class="far fa-address-card"></i> Tentang</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo strtoupper($this->session->userdata("nama")); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>#"><i class="fas fa-sliders-h"></i> Pengaturan</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>login/logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
        </div>
      </li>
    </ul>
  </div>

</div>
</nav>