<?php

$link = mysqli_connect("localhost", "root", "", "baza");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

$data_rez = $_POST["data_rez"];
$liczba_osob = $_POST["liczba_osob"];
$telefon = $_POST["telefon"];

$sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data_rez', '$liczba_osob', '$telefon')";
if(mysqli_query($link, $sql)){
    echo "reservation succesful";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>