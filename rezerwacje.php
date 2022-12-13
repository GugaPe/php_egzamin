<?php

$link = mysqli_connect("localhost", "root", "", "baza");

$data_rez = $_POST["data_rez"];
$liczba_osob = $_POST["liczba_osob"];
$telefon = $_POST["telefon"];

$sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data_rez', '$liczba_osob', '$telefon')";
if(mysqli_query($link, $sql)){
    echo "Dodano rezerwację do bazy";
} 

mysqli_close($link);

?>
