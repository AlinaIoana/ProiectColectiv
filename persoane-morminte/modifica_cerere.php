<?php

$id_cerere=$_GET['id_cerere'];

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
$query="update cerere set stadiu_solutionare='Solutionata' where id_cerere='$id_cerere'";
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}



mysqli_close($conn);
?>