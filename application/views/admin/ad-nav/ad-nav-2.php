<?php if ($_SESSION["role"] == "Admin" || $_SESSION["role"] == "Moderator" || $_SESSION["role"] == "Merchant") { ?>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <i class="mdi mdi-store menu-icon"></i>
      <span class="menu-title">Store</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse show" id="ui-basic">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="#">Add item</a></li>
        <li class="nav-item"> <a class="nav-link" href="#">Manage items</a></li>
      </ul>
    </div>
  </li>

<?php } ?>