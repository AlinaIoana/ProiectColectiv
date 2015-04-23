<?php

$cnp=$_GET['cnp'];

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
$query="select nume,prenume,adresa from concesionar where cnp='$cnp'";
$rezult=mysqli_query($conn, $query);

$row=mysqli_fetch_array($rezult);
$nume=$row['nume'];
$prenume=$row['prenume'];
$adresa=$row['adresa'];
echo "<input value='$nume' id='nume' onchange='modifica_concesionar()'></input>"; echo "<br></br>";
echo "<input value='$prenume' id='prenume' onchange='modifica_concesionar()'></input>"; echo "<br></br>";
echo "<input value='$adresa' id='adresa' onchange='modifica_concesionar()'></input>";
mysqli_close($conn);
?>