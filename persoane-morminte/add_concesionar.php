<?php

$nume1=$_POST['nume1'];
$prenume1=$_POST['prenume1'];
$cnp1=$_POST['cnp1'];
$domiciliu1=$_POST['domiciliu1'];



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
$query="insert into concesionar values ('','$nume1','$prenume1','$cnp1','$domiciliu1')";
$rezult=mysql_query($query);
if($rezult==0)
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
	<li><a href="adauga_concesionar.html">Inapoi</a></li>
</ul>	
</div>
<div class="body">

<?php
if($ok==0)
	echo "Concesionar adaugat cu succes";
	else
	echo "Eroare la introducerea concesionarului";
?>	

</div>
</body>
</html>