<?php


$cnp1=$_POST['cnp1'];
$cnp2=$_POST['cnp2'];


$cimitir=$_POST['cimitir'];
$parcela=$_POST['parcela'];
$nr_mormant=$_POST['numar_mormant'];
$nr_contract=$_POST['numar_contract'];
$nr_chitanta=$_POST['numar_chitanta'];
$cerere=$_POST['id_cerere'];


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

$query="select id_concesionar from concesionar where cnp='$cnp1' or cnp='$cnp2'";
$rezult=mysql_query($query);
$row=mysql_fetch_array($rezult);
$id_concesionar1=$row['id_concesionar'];
$row=mysql_fetch_array($rezult);
$id_concesionar2=$row['id_concesionar'];

$query3="select id_cimitir from cimitir where nume_cimitir='$cimitir' and parcela='$parcela'";
$rezult3=mysql_query($query3);
$row=mysql_fetch_array($rezult3);
$id_cimitir=$row['id_cimitir'];


$query4="select id_mormant from mormant where id_cimitir='$id_cimitir' and numar='$nr_mormant'";
$rezult4=mysql_query($query4);
$row=mysql_fetch_array($rezult4);
$id_mormant=$row['id_mormant'];

$ok=0;
$query5="insert into contract values ('$id_concesionar1','$id_mormant','$nr_contract','$nr_chitanta','$cerere')";
$rezult5=mysql_query($query5);
if($rezult5==0)
	$ok=1;

$query6="insert into contract values ('$id_concesionar2','$id_mormant','$nr_contract','$nr_chitanta','$cerere')";
$rezult6=mysql_query($query6);
if($rezult6==0)
	$ok=1;


?>
<html>
<head>
<title>Adaugare concesionar</title>
</head>
<body>
<div class="header">  </div>
<div class="menu">
<ul class="meniu">
	<li><a href="adauga_contract.html">Inapoi</a></li>
</ul>	
</div>
<div class="body">

<?php
if($ok==0)
	echo "Contract adaugat cu succes";
	else
	echo "Eroare la introducerea concesionarului";
?>	

</div>
</body>
</html>