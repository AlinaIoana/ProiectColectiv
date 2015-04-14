<html>
<head>
<meta charset="utf-8">
<title>Search2</title>
</head>

<body>
<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "proiect");

$search = mysqli_real_escape_string($con, trim($_POST['searchterm']));

$cauta = "SELECT * FROM `cerere` WHERE `data_inregistrare` LIKE  '$search'";
$myData = mysqli_query($con, $cauta);
echo '<h4>Tabelul după nume</h4>' ;
echo "<table border=3>
<tr>
<th>ID</th>
<th>Nume</th>
<th>Prenume</th>
<th>Adresă</th>
<th>Dată înregistrare</th>
<th>Stadiu soluţionare</th>
</tr>";
 while($record = mysqli_fetch_array($myData)){ 
	echo "<tr>";
	echo "<td>" . $record['id_cerere'] . "</td>";
	echo "<td>" . $record['nume'] . "</td>";
	echo "<td>" . $record['prenume'] . "</td>";
	echo "<td>" . $record['adresa'] . "</td>";
	echo "<td>" . $record['data_inregistrare'] . "</td>";
	echo "<td>" . $record['stadiu_solutionare'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>
