<html>
<head>
<meta charset="utf-8">
<title>Registru cu evidenta sesizarilor</title>

<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
</head>
<body>
<div class="header"> <h2> Registru cu evidenta sesizarilor</h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../loginSubmit.php">Inapoi</a></li>
	<li><a href="../logout.php">Delogare</a></li>
</ul>
<p><a href="registre.html"><button>Mergi la Registre </button></a></p>
</div>
<div class="body">

<?php

// connect to the server

$con = mysqli_connect("localhost","root","");

//connect to the database

mysqli_select_db($con, "proiect");

//query the database

$sql = "SELECT id_reclamatie, nume, prenume, descriere FROM reclamatii_sesizari ";
$myData = mysqli_query($con, $sql);

// create the table
echo '<h4>TABEL RECLAMATII/SESIZARI</h4>' ;
echo "<table border=3>
<tr>
<th>ID</th>
<th>Nume</th>
<th>Prenume</th>
<th>Descriere</th>
</tr>";
 while($record = mysqli_fetch_array($myData)){ 
	echo "<tr>";
	echo "<td>" . $record['id_reclamatie'] . "</td>";
	echo "<td>" . $record['nume'] . "</td>";
	echo "<td>" . $record['prenume'] . "</td>";
	echo "<td>" . $record['descriere'] . "</td>";
	echo "</tr>";
}
echo "</table>";

// close connection
mysqli_close($con);

?>

</div>


</body>
</html>