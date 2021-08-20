<?php if ($_SESSION["role"] == "Admin" || $_SESSION["role"] == "Moderator" || $_SESSION["role"] == "Editor") { ?>

  <li class="nav-item">
    <a class="nav-link" style="color: #4d83ff;" data-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="blog">
      <i class="mdi mdi-blogger menu-icon"></i>
      <span class="menu-title">Blog</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse show" id="blog">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" style="color: blue;" href="#">Create Post</a></li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/Ad_Blog/alter'); ?>">Manage Posts</a></li>
      </ul>
    </div>
  </li>

<?php }
?>