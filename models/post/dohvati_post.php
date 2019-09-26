<?php 
require_once "./../../config/konekcija.php";
require_once "./post.php";

$data = null;
$statusCode = 500;

if(isset($_GET['id'])) {
  $post = dohvatiPostZaID($_GET['id']);
  if($post != false) {
    $statusCode = 200;
    // $data->message = "Uspesno dohvacen post";
    $data = $post;
  } else {
    $statusCode = 500;
    // $data->message = "Upit nije uspesno izvrsen";
    $data = null;
  }
  
} else {
  $statusCode = 404;
  $data->message = "Pogresna stranica";
}

http_response_code($statusCode);
echo json_encode($data); //JSON - JavaScript Object Notation