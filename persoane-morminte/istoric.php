<?php

include("config.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

echo "<div class='menu'>
<ul>
	<li><a href='../logout.php'>Logout</a></li>
	<li><a href='../loginSubmit.php'>Inapoi la Pagina Principala</a></li>
</ul>
</div>";

$sql = "SELECT nume_prenume_utilizator, tip_modificare, data_modificare, tabelul_modificarii, coloana_modificarii, valoare_inainte, valoare_dupa FROM istoric ";
$myData = mysqli_query($conn,$sql);
// create the table
echo "<h4>Istoricul aplicatiei</h4>";

echo "<table border='1' id='table' class='tablesorter'>
<thead>
<tr>
<th>Nume, prenume si numele de utilizator al utilizatorului care a facut modificarea</th>
<th>Tipul modificarii</th>
<th>Data modificarii &nbsp</th>
<th>Tabelul in care s-a facut modificarea</th>
<th>Coloana in care s-a facut modificarea</th>
<th>Valoarea inaintea modificarii</th>
<th>Valoarea dupa modificare</th>
</tr>
</thead></tbody>
";

 while($record = mysqli_fetch_array($myData)){ 
	echo "<tr>";
	echo "<td>" . $record['nume_prenume_utilizator'] . "</td>";
	echo "<td>" . $record['tip_modificare'] . "</td>";
	echo "<td>" . $record['data_modificare'] . "</td>";
	echo "<td>" . $record['tabelul_modificarii'] . "</td>";
	echo "<td>" . $record['coloana_modificarii'] . "</td>";
	echo "<td>" . $record['valoare_inainte'] . "</td>";
	echo "<td>" . $record['valoare_dupa'] . "</td>";
	echo "</tr>";
}
echo "</tbody></table>";
//mysqli_close($conn);

?>