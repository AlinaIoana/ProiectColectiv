<html>
<head>
	<meta charset="utf-8">
	<title>Registru anual de evidenta a contractelor de concesiune</title>
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
<div class="header"> <h2> Registru anual de evidenta a contractelor de concesiune</h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../loginSubmit.php">Inapoi</a></li>
	<li><a href="../logout.php">Delogare</a></li>
	<li><a href="Registru_concesionar.php">Înapoi la registru anual de evidenta a contractelor de concesiune</a></li>
</ul>
<br>

</div>
<div class="body">
<form action="cauta_contract2.php" method="POST">
	<p>Căutare după nume</p>
	<input type="text" name="searchterm" placeholder="Căutare după nume..."></br>
	<input type="submit" name="Submit" value="Caută" />
	</br>
</form>
<?php

// connect to the server

$con = mysqli_connect("localhost","root","");

//connect to the database

mysqli_select_db($con,"proiect");

//query the database

$sql = "SELECT  concesionar.id_concesionar,nume,prenume,adresa,contract.data_semnare, concesionar.CNP from concesionar, contract where concesionar.id_concesionar=contract.id_concesionar and contract.data_semnare LIKE '1995'";
$myData = mysqli_query($con,$sql);
// create the table
echo '<h4>Lista tuturor contractelor de concesiune din anul curent</h4>' ;
echo "<table border='3' id='table' class='tablesorter'>
<thead>
<tr>
<th>Id</th>
<th>Nume</th>
<th>Prenume</th>
<th>Adresa</th>
<th>Data semnare</th>
<th>CNP</th>
</tr>
</thead></tbody>";

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
echo "</tbody></table>";

mysqli_close($con);

?>
<br>

<!-- aici vine tot restul de cod -->
</div>


</body>
</html>