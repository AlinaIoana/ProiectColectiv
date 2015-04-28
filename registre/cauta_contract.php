<html>
<head>
<meta charset="utf-8">
<title>Search</title>
</head>

<body>
<p> <a href="Registru_concesionar.php">Înapoi la registru anual de evidenta a contractelor de concesiune </a></p>
<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "proiect");

$search = mysqli_real_escape_string($con, trim($_POST['searchterm']));

$cauta = "SELECT concesionar.id_concesionar,nume,prenume,adresa,contract.data_semnare, concesionar.CNP FROM concesionar, contract WHERE `nume` LIKE  '$search' OR `prenume`LIKE  '$search'";
$myData = mysqli_query($con, $cauta);
echo '<h4>Tabelul după nume</h4>' ;
echo "<table border=3>
<tr>
<th>Id</th>
<th>Nume</th>
<th>Prenume</th>
<th>Adresa</th>
<th>Data semnare</th>
<th>CNP</th>
</tr>";
 while($record = mysqli_fetch_array($myData)){ 
	echo "<tr>";
    echo "<td>" . $record['id_concesionar'] . "</td>";
	echo "<td>" . $record['nume'] . "</td>";
	echo "<td>" . $record['prenume'] . "</td>";
	echo "<td>" . $record['adresa'] . "</td>";
	echo "<td>" . $record['data_semnare'] . "</td>";
	echo "<td>" . $record['CNP'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>
