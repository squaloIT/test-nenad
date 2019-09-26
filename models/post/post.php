<?php

function dohvatiPostove() {
  global $konekcija;
  $query = "SELECT p.id AS idPost, p.naslov, p.mali_naslov, p.tekst, k.username, p.datumVremePostavljanja FROM post p INNER JOIN korisnik k ON p.idKorisnik = k.id";
  $result = $konekcija->query($query)->fetchAll(); 

  return $result;
}

function dohvatiKategorijeZaPost($idPost) {
  global $konekcija;
  $query = "SELECT naziv FROM kategorija k INNER JOIN post_kategorija pk ON k.id = pk.idKategorija WHERE pk.idPost = :id";
  $pripremljenUpit = $konekcija->prepare($query);
  $pripremljenUpit->bindParam(":id", $idPost);

  $pripremljenUpit->execute();
  $result = $pripremljenUpit->fetchAll();
  return $result;
}

function dohvatiPostoveZaKategoriju($idKategorija) {
  global $konekcija;

  $query = "SELECT p.id AS idPost, p.naslov, p.mali_naslov, p.tekst, k.username, p.datumVremePostavljanja FROM post p INNER JOIN korisnik k ON p.idKorisnik = k.id INNER JOIN post_kategorija pk ON p.id = pk.idPost
  WHERE pk.idKategorija = :idKat";

  $pripremljenUpit = $konekcija->prepare($query);
  $pripremljenUpit->bindParam(":idKat", $idKategorija);

  $pripremljenUpit->execute();
  $result = $pripremljenUpit->fetchAll();
  return $result;
}

function dohvatiPostZaID($idPost) {
  global $konekcija;

  $query ="SELECT p.id AS idPost, p.naslov, p.mali_naslov, p.tekst, k.username, p.datumVremePostavljanja FROM post p INNER JOIN korisnik k ON p.idKorisnik = k.id WHERE p.id = :id";

  $pripremljenUpit = $konekcija->prepare($query);
  $pripremljenUpit->bindParam(":id", $idPost);

  $pripremljenUpit->execute();
  $post = $pripremljenUpit->fetch(PDO::FETCH_ASSOC); //vraca false ako ne uspe da dohvati

  return $post;
}

function izmeniPost($naslov, $maliNaslov, $tekst, $idPost) {
  global $konekcija;

  $query = "UPDATE post SET naslov=:naslov, mali_naslov=:maliNaslov, tekst=:tekst, datumVremePostavljanja=:datumVremePostavljanja WHERE id = :idPost";
  $datum = date("Y-m-d H:i:s");
  $prUpit=$konekcija->prepare($query);
  $prUpit->bindParam("naslov", $naslov, PDO::PARAM_STR);
  $prUpit->bindParam("maliNaslov", $maliNaslov, PDO::PARAM_STR);
  $prUpit->bindParam("tekst", $tekst, PDO::PARAM_STR);
  $prUpit->bindParam("datumVremePostavljanja", $datum);
  $prUpit->bindParam("idPost", $idPost);

  return $prUpit->execute(); 
}

function unosPost($naslov, $maliNaslov, $tekst, $idKorisnik) {
  global $konekcija;

  $query = "UPDATE post SET naslov=:naslov, mali_naslov=:maliNaslov, tekst=:tekst, datumVremePostavljanja=:datumVremePostavljanja WHERE id = :idPost";
  $datum = date("Y-m-d H:i:s");
  $prUpit=$konekcija->prepare($query);
  $prUpit->bindParam("naslov", $naslov, PDO::PARAM_STR);
  $prUpit->bindParam("maliNaslov", $maliNaslov, PDO::PARAM_STR);
  $prUpit->bindParam("tekst", $tekst, PDO::PARAM_STR);
  $prUpit->bindParam("datumVremePostavljanja", $datum);
  $prUpit->bindParam("idPost", $idPost);

  return $prUpit->execute(); 
}