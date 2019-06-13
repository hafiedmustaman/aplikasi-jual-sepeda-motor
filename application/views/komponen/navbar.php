<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand" href="<?php echo base_url() ?>rumah"><i class="fas fa-motorcycle"></i> PT. XYZ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>rumah/berita"><i class="fas fa-bullhorn"></i> Berita</a>
      </li>  
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-book"></i> Katalog
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Honda</a>
          <a class="dropdown-item" href="#">Yamaha</a>
          <a class="dropdown-item" href="#">Suzuki</a>
          <a class="dropdown-item" href="#">Kawasaki</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="far fa-address-card"></i> Tentang Kami</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-sign-in-alt"></i> Masuk
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
      </li> 
    </ul>
  </div>

</div>
</nav>