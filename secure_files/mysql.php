<?php
  DEFINE('HOST', 'localhost');
  DEFINE('USER', 'kbsmith01_user1');
  DEFINE('PASS', 'Mynewpassword2');
  DEFINE('DB', 'kbsmith01_cs');

  $link = @mysqli_connect(HOST, USER, PASS, DB) or die ('The following error occurred: '.mysqli_connect_error());

  mysqli_set_charset($link, 'utf8');
?>
