<?php session_start();
  require_once("./../config/env.php");
  require_once("./../config/konekcija.php");
  require_once("./../models/korisnik/korisnik.php");

  if(isset($_POST['btnLogin'])) {

    $email = $_POST['tbEmail'];

    //REGEX

    $password = crypt($_POST['tbPassword'], SALT);
    $user = dohvatiKorisnikaEmailPassword($email, $password);

    if($user == false) {
      $_SESSION['error_message'] = "Ne postoji korisnik sa tim email i sifrom";
      header("Location: ./../index.php?stranica=login");
    } else {
      
      $_SESSION['korisnik'] = $user; 
      $_SESSION['korpa'] = [];
      // if($user->naziv == "Administrator") {
      //   header("Location: admin.php?stranica=admin");
      // } else {
      //   header("Location: index.php?stranica=pocetna");
      // }
      $user->naziv == "Administrator" ? 
        header("Location: ./../admin.php?stranica=admin") : header("Location: ./../index.php?stranica=pocetna");      
    }
    
  } else {
    header("Location: index.php?stranica=login");
  }

?>