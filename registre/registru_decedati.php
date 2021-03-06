<html>
<head>
	<meta charset="utf-8">
	<title>Registru index anual al decedatilor</title>
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
<div class="header"> <h2> Registru index anual al decedatilor</h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../loginSubmit.php">Inapoi</a></li>
	<li><a href="../logout.php">Delogare</a></li>
	<li><a href="registre.html">Inapoi la Pagina de Registre</a></li>
</ul>

</div>
<div class="body">
<ul>
<br><li><a href="toti_decedatii.php">Lista tuturor decedatilor</a></li>
<li><a href="cauta_decedat.php">Cauta un decedat</a></li>


</ul>
<?php

// connect to the server

$con = mysqli_connect("localhost","root","");

//connect to the database

mysqli_select_db($con, "proiect");

//query the database

$sql = "SELECT nume, prenume,adresa,religie, data_ora_inmormantare FROM decedat where data_ora_inmormantare LIKE '%2015%' ";
$myData = mysqli_query($con, $sql);

// create the table
echo '<h4>Lista decedatilor din anul 2015</h4>' ;
echo "<table border='3' id='table' class='tablesorter'>
<thead>
<tr>
<th>Nume</th>
<th>Prenume &nbsp</th>
<th>Adresă</th>
<th>Religie</th>
<th>Data si ora inmormantarii</th>
</tr>
</thead></tbody>";

 while($record = mysqli_fetch_array($myData)){ 
	echo "<tr>";
	echo "<td>" . $record['nume'] . "</td>";
	echo "<td>" . $record['prenume'] . "</td>";
	echo "<td>" . $record['adresa'] . "</td>";
	echo "<td>" . $record['religie'] . "</td>";
	echo "<td>" . $record['data_ora_inmormantare'] . "</td>";
	echo "</tr>";
}
echo "</tbody></table>";

// close connection
mysqli_close($con);

?>



</div>


</body>
</html>