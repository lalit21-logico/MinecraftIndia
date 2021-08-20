<?php if ($_SESSION["role"] == "Admin" || $_SESSION["role"] == "Moderator") { ?>

  <li class="nav-item">
    <?php $filter = "all"; ?>
    <a class="nav-link" href="<?php echo base_url('Admin/Ad_User_Managment/getData/' . $filter); ?>">
      <i class="mdi mdi-emoticon menu-icon"></i>
      <span class="menu-title">User Management</span>
    </a>
  </li>

<?php } ?>