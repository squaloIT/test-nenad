<?php 

if(isset($_POST['btnRegister'])) {  
  require_once "./config/konekcija.php";
  require_once "./config/env.php";
  require_once "./models/korisnik/korisnik.php";

  $username = $_POST['tbUsername'];
  $password = $_POST['tbPassword'];
  $email = $_POST['tbEmail'];

  //REGEX !!!!!!!!
  // DOdati regularnze izraze

  $passwordKriptovan = crypt($password, SALT);
  
  $rezultat = unesiNovogKorisnika($username, $email,$passwordKriptovan);

  if($rezultat) {
    header("Location: index.php?stranica=pocetna");
  } else {
    // echo "NIJE USPESNO UNET KORISNIK";
    // U REALNOSTI PRIKAZUJEMO GRESKU NA NEKOJ DRUGOJ STRANI
    header("Location: index.php?stranica=register");
  }
}