<html>
<head>
<meta charset="utf-8">
<title>Search</title>
</head>

<body>
<ul>
	<li><a href="../loginSubmit.php">Inapoi</a></li>
	<li><a href="../logout.php">Delogare</a></li>
	<li><a href="Rapoarte_contracte.php">Înapoi la rapoarte contracte de concesiune</a></li>
</ul>
<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "proiect");


if(isset($_POST['searchterm'])){
$search = mysqli_real_escape_string($con, trim($_POST['searchterm']));
$search = $search - 20;

$search = mysqli_real_escape_string($con, trim($_POST['searchterm']));

$cauta = "select distinct concesionar.nume, prenume, cnp, mormant.numar,suprafata,cimitir.nume_cimitir, parcela from concesionar, mormant, cimitir, contract where contract.data_semnare LIKE '$search' and concesionar.id_concesionar=contract.id_concesionar and contract.id_mormant=mormant.id_mormant and mormant.id_cimitir=cimitir.id_cimitir";
$myData = mysqli_query($con, $cauta);
echo '<h4>Rapoarte despre toate contractelor de concesiune expirate in anul dat</h4>' ;
echo "<table border='3' id='table' class='tablesorter'>
<thead>
<tr>
<th>Nume</th>
<th>Prenume</th>
<th>CNP</th>
<th>Numar</th>
<th>Suprafata</th>
<th>Nume-cimitir</th>
<th>Parcela</th>
</tr>
</thead></tbody>";

 while($record = mysqli_fetch_array($myData)){ 
	echo "<tr>";
	echo "<td>" . $record['nume'] . "</td>";
	echo "<td>" . $record['prenume'] . "</td>";
	echo "<td>" . $record['cnp'] . "</td>";
	echo "<td>" . $record['numar'] . "</td>";
	echo "<td>" . $record['suprafata'] . "</td>";
	echo "<td>" . $record['nume_cimitir'] . "</td>";
	echo "<td>" . $record['parcela'] . "</td>";
	echo "</tr>";
}
echo "</tbody></table>";
<<<<<<< HEAD
}
=======

>>>>>>> origin/master
mysqli_close($con);

?>
<br>

<!-- aici vine tot restul de cod -->
</div>


</body>
</html>