<?php
  /* Connect to a MySQL database using driver invocation */
  $dsn = 'mysql:dbname=nenad_p;host=127.0.0.1';
  $user = 'root';
  $password = '';

  try {
      $konekcija = new PDO($dsn, $user, $password);
      $konekcija->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
  }

?>