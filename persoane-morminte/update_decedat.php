<?php
include("config.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

if( isset($_POST['nume'])){
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$domiciliu = $_POST['adresa'];
	$religie = $_POST['religie'];
	$data_ora_inmormantarii = $_POST['data_ora_inmormantarii'];
	$id_decedat = $_POST['id_decedat'];
	

		$sql = "UPDATE decedat  set nume = '" . $nume . "', prenume = '" . $prenume . "', adresa = '" . $domiciliu. "', religie = '" . $religie. "', data_ora_inmormantare = '" . $data_ora_inmormantarii . "' WHERE decedat_id = '" . $id_decedat . "'";
		echo $sql;
		$result = $conn->query($sql);
		if($result){
			echo "Adaugarea dcedatului s-a realizat cu succes.";
		}else{
			echo "Adaugarea nu a reusit. Reincercati.";
		}
}
?>

<html>
<head><title></title></head>
<body>
<div class="header"> <h2></h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../loginSubmit.php">Inapoi</a></li>
	<li><a href="../logout.php">Delogare</a></li>
	<li><a href="update_decedat_h.php">Inapoi la pagina de modificare a datelor despre decedati</a></li>
	
</ul>
</div>
<div class="body">
 
<!-- aici vine tot restul de cod -->
</div>
</body>
</html>