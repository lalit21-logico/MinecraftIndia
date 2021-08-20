<?php if ($_SESSION["role"] == "Admin" || $_SESSION["role"] == "Moderator" || $_SESSION["role"] == "CustomerAssociate") { ?>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="mdi mdi-file-document-box-outline menu-icon"></i>
      <span class="menu-title">Reports</span>
    </a>
  </li>

<?php } ?>