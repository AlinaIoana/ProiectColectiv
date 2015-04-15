<html>
<head>
<meta charset="utf-8">
<title>Registru de evidenta a cererilor de inhumare</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
</head>
<body>
<div class="header"> <h2> Registru de evidenţă a cererilor de înhumare</h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../loginSubmit.php">Inapoi</a></li>
	<li><a href="../logout.php">Delogare</a></li>
</ul>
<br>
</br>
</div>
<div class="body">

<?php

// connect to the server

$con = mysqli_connect("localhost","root","");

//connect to the database

mysqli_select_db($con,"proiect");

//query the database

$sql = "SELECT id_cerere, nume, prenume,adresa, data_inregistrare,stadiu_solutionare FROM cerere where stadiu_solutionare = 'Rezolvat ' ";
$myData = mysqli_query($con,$sql);
echo '<h4>TABEL CERERI NEREZOLVATE</h4>' ;
echo "<table border=3>
<tr>
<th>ID</th>
<th>Nume</th>
<th>Prenume</th>
<th>Adresă</th>
<th>Data înregistrare</th>
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



<p> <a href="Registru_cereri.php"><button>Înapoi la cereri în aşteptare</button></a></p>
<!-- aici vine tot restul de cod -->
</div>


</body>
</html>