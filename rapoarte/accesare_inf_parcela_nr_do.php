<html>
<head><title>Accesare informatii</title></head>
<body>
<div class="header"> <h2>Accesare informatii</h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../logout.php">Delogare</a></li>
	<li><a href="accesare_inf_parcela_nr.php">Inapoi</a></li>
</ul>
</div>
<div class="body">
<!-- aici vine tot restul de cod -->
<style>
table, th, td {
     border: 1px solid black;
}
</style>

<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'proiect';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

if( isset($_POST['cimitir'])){
	$cimitir = $_POST['cimitir'];
	$parcela = $_POST['parcela'];
	$numar_mormant = $_POST['numar_mormant'];
	echo "Ati cautat informatii despre locul de veci cu numarul <b>" . $numar_mormant . "</b>, din <b>parcela " . $parcela . "</b> din <b>" . $cimitir. "</b>";
	
$sql = "SELECT distinct c.nume, c.prenume, c.cnp, c.adresa, ct.nr_contract, ct.nr_chitanta from concesionar c, contract ct, mormant m, cimitir cim where c.id_concesionar=ct.id_concesionar and cim.nume_cimitir='" . $cimitir . "' and  cim.parcela='"    . $parcela . "' and  m.numar= '" . $numar_mormant . "'"; 
//echo $sql;
echo "<br/><br/>"; 
echo "Concesionarii locului de veci cautat: ";
echo "<br/><br/>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>nume</th><th>prenume</th><th>cnp</th><th>adresa</th><th>nr_contract</th><th>nr_chitanta</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["nume"]. "</td><td> " . $row["prenume"]. "</td><td>" . $row["cnp"]. "</td><td>" . $row["adresa"]. "</td><td>" . $row["nr_contract"]. "</td><td>" . $row["nr_chitanta"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$sql = "SELECT distinct m.numar, m.suprafata, d.nume, d.prenume, d.religie, d.adresa, d.data_ora_inmormantare from mormant m, decedat d, cimitir cim where m.id_mormant=d.id_mormant and cim.nume_cimitir='" .$cimitir . "' and cim.parcela='" .$parcela. "' and m.numar='" .$numar_mormant . "'"; 
//echo $sql;
echo "<br/><br/>"; 
echo "Decedatii inmormantati in locul cautat"; 
echo "<br/><br/>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>numar</th><th>suprafata</th><th>nume</th><th>prenume</th><th>religie</th><th>adresa</th><th>data_ora_inmormantare</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["numar"]. "</td><td> " . $row["suprafata"]. "</td><td>" . $row["nume"]. "</td><td>" . $row["prenume"]. "</td><td>" . $row["religie"]. "</td><td>" . $row["adresa"]. "</td><td>" . $row["data_ora_inmormantare"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
}

$conn->close();	
?>
</div>
</body>
</html>