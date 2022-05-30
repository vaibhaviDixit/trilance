<?php

session_start();

     include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/database.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/functions.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/Trilance/includes/constants.inc.php');

unset( $_SESSION['ADMIN']);
session_destroy();
redirect(SITE_PATH);
?>
