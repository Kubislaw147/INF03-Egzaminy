<?php
$data=$_POST['data'];
$ilosc=$_POST['ilosc'];
$tel=$_POST['telefon'];
echo "Dodano rezerwacje do bazy danych";
echo $data;

$sql= mysqli_connect("localhost","root","","wszystkiesmaki");
$zapytanie = "INSERT INTO rezerwacje (data_rez,liczba_osob,telefon) VALUES ($data,$ilosc,$tel);";
mysqli_query($sql,$zapytanie);
mysqli_close($sql);


?>