<body>

  <?php if (!empty($tabNumber)) {
    if ($tabNumber == 1) {
      echo '<nav class="navbar navbar-expand-lg navbar-dark fixed-top static-top">
        <div class="container-fluid">
    <a class="navbar-brand" href="#">';
    } else {
      echo '<nav class="navbar navbar-expand-lg bg-dark shadow navbar-dark fixed-top static-top">
      <div class="container-fluid">
      <a class="navbar-brand" href="' . base_url() . '">';
    }
  } ?>
  <img class="logo" src="<?php echo base_url('framework/IMG/minecraft-india.png'); ?>" alt="Minecraft India">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item my-2">
        <?php if (!empty($tabNumber)) {
          if ($tabNumber == 1) {
            echo '<a class="nav-link curr-act space" href="#">Home</a>';
          } else {
            echo '<a class="nav-link space" href="' . base_url() . '">Home</a>';
          }
        } ?>
      </li>
      <li class="nav-item my-2">
        <?php if (!empty($tabNumber)) {
          if ($tabNumber == 2) {
            echo '<a class="nav-link curr-act space" href="#">Store</a>';
          } else {
            echo '<a class="nav-link space" href="' . base_url('Store') . '">Store</a>';
          }
        } ?>
      </li>

      <li class="nav-item active my-2">
        <?php if (!empty($tabNumber)) {
          if ($tabNumber == 3) {
            echo '<a class="nav-link curr-act space" href="#">Blog</a>';
          } else {
            echo '<a class="nav-link space" href="' . base_url('Blog') . '">Blog</a>';
          }
        } ?>
      </li>

      <li class="nav-item my-2">
        <?php if (!empty($tabNumber)) {
          if ($tabNumber == 4) {
            echo '<a class="nav-link curr-act space" href="#">Affilates</a>';
          } else {
            echo '<a class="nav-link space" href="' . base_url('Affilates') . '">Affilates</a>';
          }
        } ?>
      </li>

      <li class="nav-item   <?php if (!empty($tabNumber)) {
                              if ($tabNumber == 5) {
                                echo 'curr-act';
                              }
                            } ?> dropdown my-2 space">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Join Server/Realm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/MinecraftIndia/index.php/Theme/r">Join Server</a>
          <a class="dropdown-item" href="http://localhost/MinecraftIndia/index.php/Theme/nr">Join Realm</a>
        </div>
      </li>
      <li class="nav-item <?php if (!empty($tabNumber)) {
                            if ($tabNumber == 6) {
                              echo 'curr-act';
                            }
                          } ?> my-2 dropdown space">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Support
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/MinecraftIndia/index.php/Theme/r">Report Someting/Somone</a>
          <a class="dropdown-item" href="http://localhost/MinecraftIndia/index.php/Theme/nr">Contact Us</a>
        </div>
      </li>
      <div class="row">
        <?php if ($this->session->userdata('mc_user') != '') { ?>

          <li class="nav-item">
            <a type="button" class="btn space btn-danger" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url('Login/logout'); ?>">Log Out</a>
          </li>

        <?php
        } else {
        ?>
          <li class="nav-item">
            <a type="button" class="btn space btn-danger" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url('Signup'); ?>">Sign Up</a>
          </li>
          <li class="nav-item">
            <a type="button" class="btn space btn-primary" aria-haspopup="true" aria-expanded="flase" href="<?php echo base_url('Login'); ?>">Log In</a>
          </li>

        <?php
        } ?>

      </div>
    </ul>
  </div>
  </div>
  </nav>