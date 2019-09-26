<?php 

function dohvatiKategorije() {
  global $konekcija;

  $query = "SELECT * FROM kategorija";
  return $konekcija->query($query)->fetchAll();
}
