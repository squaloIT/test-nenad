<?php

function unesiNovogKorisnika($username, $email, $password) {
  global $konekcija;
  // TRY I CATCH

  $query = "INSERT INTO korisnik (username, email, password, idUloga)
  VALUES (:username, :email, :password, 2)";
  
  $prUpit = $konekcija->prepare($query);
  $prUpit->bindParam(":username",$username);
  $prUpit->bindParam(":email",$email);
  $prUpit->bindParam(":password",$password);

  return $prUpit->execute(); // true || false
  // $konekcija->lastInsertId()       -     
}

function dohvatiKorisnikaEmailPassword($email, $password) {
  global $konekcija;

  $query = "SELECT k.id, email, username, idUloga, naziv 
  FROM korisnik k INNER JOIN uloga u ON k.idUloga = u.id 
  WHERE email = :email AND password = :password";

  $prUpit = $konekcija->prepare($query);
  $prUpit->bindParam(":email",$email);
  $prUpit->bindParam(":password",$password);

  $prUpit->execute(); 
  return $prUpit->fetch(); // PHP docs - neki red iz baze | false
}