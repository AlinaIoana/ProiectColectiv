<?php
session_start();
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
	
	$nume_before = $_POST['nume_before'];
	$prenume_before = $_POST['prenume_before'];
	$domiciliu_before = $_POST['adresa_before'];
	$religie_before = $_POST['religie_before'];
	$data_ora_inmormantarii_before = $_POST['data_ora_inmormantarii_before'];
	

		$sql = "UPDATE decedat  set nume = '" . $nume . "', prenume = '" . $prenume . "', adresa = '" . $domiciliu. "', religie = '" . $religie. "', data_ora_inmormantare = '" . $data_ora_inmormantarii . "' WHERE decedat_id = '" . $id_decedat . "'";
		
		//get the user firstname, lastname and username
		$nume_u = "SELECT nume FROM utilizator WHERE id_utilizator = '" . $_SESSION['userId'] . "'";
		$nume_u = $conn -> query($nume_u);
		$nume_u = $nume_u->fetch_assoc()['nume'];
		$prenume_u = "SELECT prenume FROM utilizator WHERE id_utilizator = '" . $_SESSION['userId']. "'";
		$prenume_u = $conn -> query($prenume_u);
		$prenume_u = $prenume_u->fetch_assoc()['prenume'];
		$nume_utilizator = "SELECT username FROM utilizator WHERE id_utilizator = '" . $_SESSION['userId']. "'";
		$nume_utilizator = $conn -> query($nume_utilizator);
		$nume_utilizator = $nume_utilizator->fetch_assoc()['username'];
		$date_utilizator =  $nume_u . '; '. $prenume_u . '; ' . $nume_utilizator  ;
		 
		//insert in table istoric fields that are modified
		if($nume != $nume_before){
			$sql1 = "INSERT INTO istoric (nume_prenume_utilizator, tip_modificare, data_modificare, tabelul_modificarii, coloana_modificarii, valoare_inainte, valoare_dupa) VALUES ('". $date_utilizator . "', 'modificare', now(), 'decedat', 'nume', '" . $nume_before . "', '" . $nume. "')";
			$conn -> query($sql1);
		}
		
		if($prenume != $prenume_before){
			$sql1 = "INSERT INTO istoric (nume_prenume_utilizator, tip_modificare, data_modificare, tabelul_modificarii, coloana_modificarii, valoare_inainte, valoare_dupa) VALUES ('". $date_utilizator . "', 'modificare', now(), 'decedat', 'prenume', '" . $prenume_before . "', '" . $prenume. "')";
			$conn -> query($sql1);
		}
		
		if($religie != $religie_before){
			$sql1 = "INSERT INTO istoric (nume_prenume_utilizator, tip_modificare, data_modificare, tabelul_modificarii, coloana_modificarii, valoare_inainte, valoare_dupa) VALUES ('". $date_utilizator . "', 'modificare', now(), 'decedat', 'religie', '" . $religie_before . "', '" . $religie. "')";
			$conn -> query($sql1);
		}
		
		if($domiciliu != $domiciliu_before){
			$sql1 = "INSERT INTO istoric (nume_prenume_utilizator, tip_modificare, data_modificare, tabelul_modificarii, coloana_modificarii, valoare_inainte, valoare_dupa) VALUES ('". $date_utilizator . "', 'modificare', now(), 'decedat', 'domiciliu', '" . $domiciliu_before . "', '" . $domiciliu . "')";
			$conn -> query($sql1);
		}
		
		if($data_ora_inmormantarii != $data_ora_inmormantarii_before){
			$sql1 = "INSERT INTO istoric (nume_prenume_utilizator, tip_modificare, data_modificare, tabelul_modificarii, coloana_modificarii, valoare_inainte, valoare_dupa) VALUES ('". $date_utilizator . "', 'modificare', now(), 'decedat', 'data_ora_inmormantare', '" . $$data_ora_inmormantarii_before . "', '" . $data_ora_inmormantarii . "')";
			$conn -> query($sql1);
		}
		
		//echo $sql;
		$result = $conn->query($sql);
		if($result){
					echo "Ati modificat datele cu succes!";
					echo "<li><a href='istoric.php'>Istoricul modificarilor</a></li>";
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