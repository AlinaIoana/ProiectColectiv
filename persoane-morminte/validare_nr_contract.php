<?php

$numar=$_GET['nr_contract'];

$hostname="localhost";
$username="root";
$password="";
$database="proiect";

$conn=mysql_connect($hostname,$username,$password,$database);
if (!$conn) 
{
    die('Nu ma pot conecta la MySQL !!! : ' . mysql_error());
}

$sel=mysql_select_db($database);
if (!$sel) 
{
	die ("Nu gasesc baza de date !!!");
}
$ok=0;
$query="select nr_contract from contract";
$rezult=mysql_query($query);

while($row=mysql_fetch_array($rezult))
{	
	if($numar==$row['nr_contract'])
	{
		$ok=1;
	}
}
if($ok==0)
	echo "Numar contract valid!";
	else
	echo "Numar contract invalid!Deja exista in baza de date.";
	
mysql_close($conn);
?>