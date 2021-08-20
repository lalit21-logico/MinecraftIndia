<?php if ($_SESSION["role"] == "Admin" || $_SESSION["role"] == "Moderator" || $_SESSION["role"] == "ServerAssociate") { ?>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="mdi mdi-server menu-icon"></i>
      <span class="menu-title">Server Request</span>
    </a>
  </li>

<?php } ?>