<?php

$nume=$_GET['denumire'];

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
$query="select parcela from cimitir where nume_cimitir='$nume'";
$rezult=mysqli_query($conn, $query);

echo "<select id='parcela' onchange='afisare_numar(this.value)' name='parcela' required>";
echo "<option></option>";
while($row=mysqli_fetch_array($rezult))
{
echo "<option>".$row['parcela']."</option>";
}
echo "</select>";
//mysql_close($conn);
?>