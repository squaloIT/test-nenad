<?php 
require_once "./../../config/konekcija.php";

$data = new stdClass;
$statusCode = 500;

if(isset($_GET['id'])) {

  $query = "DELETE FROM post WHERE id = :idPost";
  $prUpit = $konekcija->prepare($query);
  $prUpit->bindParam(":idPost", $_GET['id'], PDO::PARAM_INT);
  $rez = $prUpit->execute();
  $data->id=$_GET['id'];
  $data->upit=$query;
  $data->prupit=$prUpit;

  if($rez) {
    $statusCode = 200;
    $data->message = "Uspesno obrisan podatak";
  } else {
    // echo "GRESKA PRILIKOM BRISANJA";
    //vratiti 500
    $statusCode = 500;
    $data->message= "Upit nije uspesno izvrsen";
  }

} else {
  //VRATITI STATUSNI KOD 404
  // header("Location: index.php?stranica=pocetna");
  $statusCode = 404;
  $data->message ="Pogresna stranica";
}

http_response_code($statusCode);
echo json_encode($data); //JSON - JavaScript Object Notation