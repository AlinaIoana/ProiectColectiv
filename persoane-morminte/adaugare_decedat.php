<?php
include("config.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

if( isset($_POST['nume'])){
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	//$cnp = $_POST['cnp'];
	$domiciliu = $_POST['domiciliu'];
	$religie = $_POST['religie'];
	$cimitir = $_POST['cimitir'];
	$parcela = $_POST['parcela'];
	$numar_parcela = $_POST['numar_mormant'];
	$data_inmormantarii = $_POST['data'];
	$ora_inmormantarii = $_POST['time'];

$ok = 1;

//$sql = "SELECT poza, nume_p FROM poza WHERE id_o = ". $input;
	
$sql = "SELECT id_cimitir FROM cimitir WHERE nume_cimitir = '" . $cimitir . "' AND parcela = '" . $parcela . "'";
$id_cimitir_parcela = $conn->query($sql);

if( mysqli_num_rows($id_cimitir_parcela) != 1){
	$ok = 0;
	echo "Eroare la introducerea decedatului; verificati datele introduse despre cimitirul si parcela locului de veci.";
}else{
	$sql = "SELECT id_mormant FROM mormant WHERE id_cimitir = '" . 	$id_cimitir_parcela->fetch_assoc()['id_cimitir'] . "' AND numar = " . $numar_parcela;
	$id_mormant = $conn->query($sql);
	
	if( mysqli_num_rows($id_mormant) != 1){
		$ok = 0;
		echo mysqli_num_rows($id_mormant);
		echo "Eroare la introducerea decedatului; verificati datele introduse despre cimitirul si parcela locului de veci.(1)";
	}else{
		$date_time_inmormantare = $data_inmormantarii . " " . $ora_inmormantarii . ":00";
		$sql = "INSERT INTO decedat ( nume, prenume, adresa, religie, id_mormant, data_ora_inmormantare ) VALUES ('" . $nume . "','" . $prenume . "', '" . $domiciliu. "', '" . $religie. "', '" . $id_mormant->fetch_assoc()['id_mormant'] . "', '" . $date_time_inmormantare . "')";
		echo $sql;
		$result = $conn->query($sql);
		if($result){
			echo "Adaugarea dcedatului s-a realizat cu succes.";
		}else{
			echo "Adaugarea nu a reusit. Reincercati.";
		}

	}
}
}

?>
<html>
<head>
<title>Adaugare decedat</title>
</head>
<body>
<div class="header">  </div>
<div class="menu">
<ul>
	<li><a href="adaugare_decedat_h.php">Inapoi</a></br></li>
	<li><a href="../logout.php">Delogare</a></li>
</div>
<div class="body">

</div>
</body>
</html>