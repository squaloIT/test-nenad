<?php

require_once "./../../config/konekcija.php";
require_once "./post.php";

if(isset($_POST['btnSubmitPost'])) {

  $naslov = $_POST['tbNaslov'];
  $maliNaslov = $_POST['tbMaliNaslov'];
  $tekst = $_POST['taTekst'];
  $idPost = $_POST['idPost']; //name elemnata fomre

  $rez = izmeniPost($naslov, $maliNaslov, $tekst,$idPost);

  if($rez != false) {
    header("Location: ./../../admin.php?stranica=postovi");
  }
  else {
    echo "GRESKA PRILIKOM UPITA";
    //SESIJE DODATI KAD IH ODRADIMO
  }
} else {
  header("Location: index.php?stranica=pocetna");
}