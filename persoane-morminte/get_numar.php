<?php

$nume=$_GET['denumire'];
$parcela=$_GET['parcela'];

$hostname="localhost";
$username="root";
$password="";
$database="proiect";

$conn=mysqli_connect($hostname,$username,$password,$database);
if (!$conn) 
{
    die('Nu ma pot conecta la MySQL !!! : ' . mysql_error());
}

/*$sel=mysql_select_db($database);
if (!$sel) 
{
	die ("Nu gasesc baza de date !!!");
}*/
$query="select id_cimitir from cimitir where nume_cimitir='$nume' and parcela='$parcela' ";
$rezult=mysqli_query($conn, $query);
$row=mysqli_fetch_array($rezult);
$id_cimitir=$row['id_cimitir'];

$query1="select numar from mormant where id_cimitir='$id_cimitir' and id_mormant not in (select id_mormant from contract)";
$rezult1=mysqli_query($conn, $query1);


echo "<select id='numar' name='numar_mormant' required>";
echo "<option></option>";
while($row1=mysqli_fetch_array($rezult1))
{
echo "<option>".$row1['numar']."</option>";
}
echo "</select>";
//mysql_close($conn);
?>