<?php

$cnp1=$_GET['cnp'];
$nume1=$_GET['nume'];
$prenume1=$_GET['prenume'];
$adresa1=$_GET['adresa'];

$hostname="localhost";
$username="root";
$password="";
$database="proiect";

$conn=mysqli_connect($hostname,$username,$password,$database);
if (!$conn) 
{
    die('Nu ma pot conecta la MySQL !!! : ' . mysqli_error());
}

$sel=mysqli_select_db($conn,$database);
if (!$sel) 
{
	die ("Nu gasesc baza de date !!!");
}
$query="update concesionar set nume='$nume1', prenume='$prenume1', adresa='$adresa1' where cnp='$cnp1'";

if (mysqli_query($conn, $query)) {
    echo "Concesionar modificat cu succes";
} else {
    echo "Eroare la modificarea concesionarului " . mysqli_error($conn);
}
mysqli_close($conn);
?>