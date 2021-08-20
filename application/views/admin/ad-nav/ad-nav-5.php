<?php if ($_SESSION["role"] == "Admin" || $_SESSION["role"] == "Moderator" || $_SESSION["role"] == "ServerAssociate") { ?>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="mdi mdi-server-security menu-icon"></i>
      <span class="menu-title">Realm Request</span>
    </a>
  </li>

<?php } ?>