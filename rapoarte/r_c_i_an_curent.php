<html>
<head>
	<meta charset="utf-8">
	<title>Rapoarte contracte de concesiune</title>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
	<script type="text/javascript" src="jquery-latest.js"></script> 
    <script type="text/javascript" src="jquery.tablesorter.min.js"></script>
	<link rel="stylesheet" href="./themes/blue/style1.css" type="text/css" media="print, projection, screen" />
	<script type="text/javascript">
	$(document).ready(function() 
        { 
            $("#table").tablesorter({sortList: [[3,1],[2,0]]}); 
        } 
    ); 
    
	</script>
</head>
<body>
<div class="header"> <h2> Rapoarte contracte de concesiune</h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../loginSubmit.php">Inapoi</a></li>
	<li><a href="../logout.php">Delogare</a></li>
	<li><a href="Rapoarte_contracte.php">Înapoi la rapoarte contracte de concesiune</a></li>
</ul>
<br>

</div>
<div class="body">
<?php

// connect to the server

$con = mysqli_connect("localhost","root","");

//connect to the database

mysqli_select_db($con,"proiect");

//query the database

$sql = "select distinct concesionar.nume, prenume, cnp, mormant.numar,suprafata,cimitir.nume_cimitir, parcela from concesionar, mormant, cimitir, contract where contract.data_semnare LIKE '%2015%' and concesionar.id_concesionar=contract.id_concesionar and contract.id_mormant=mormant.id_mormant and mormant.id_cimitir=cimitir.id_cimitir";
$myData = mysqli_query($con,$sql);
// create the table
echo '<h4>Rapoarte despre toate contractelor de concesiune incheiate in anul curent</h4>' ;
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

mysqli_close($con);

?>
<br>

<!-- aici vine tot restul de cod -->
</div>


</body>
</html>