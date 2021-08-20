<?php if ($_SESSION["role"] == "Admin") { ?>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('Admin/Ad_Role_Manager') ?>">
      <i class="mdi mdi-emoticon menu-icon"></i>
      <span class="menu-title">Role Manager</span>
    </a>
  </li>

<?php } ?>