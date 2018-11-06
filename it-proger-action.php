<?php
  session_start ();
  $_SESSION['name'] = $_POST['name'];

  setcookie('name', $_POST['name'], time() + 3600);

  header ('Location: /');
  exit ();

 ?>
