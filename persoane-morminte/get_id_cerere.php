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
$query="select id_cerere from cerere where cnp='$cnp' and stadiu_solutionare='In asteptare'";
$rezult=mysqli_query($conn, $query);

echo "<select id='id_cerere' onchange='modifica_stadiul_cererii(this.value)' name='id_cerere' required>";
echo "<option></option>";
while($row=mysqli_fetch_array($rezult))
{
echo "<option>".$row['id_cerere']."</option>";
}
echo "</select>";
mysqli_close($conn);
?>