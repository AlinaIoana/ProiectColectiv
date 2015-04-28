<?php
	
$serverName = "localhost";
$userName = "root";
$dbPassword = "";
$dbName = "proiect";

$Input = $_POST['text'];
$Input=trim($Input);
$Input = stripslashes($Input);
$Input = htmlspecialchars($Input);

$conn= mysqli_connect($serverName, $userName, $dbPassword) or die(mysql_error());
mysqli_select_db($conn,$dbName) or die(mysql_error());

$query = "SELECT contract.nr_contract, concesionar.nume, concesionar.prenume, concesionar.cnp,
mormant.numar, mormant.suprafata,
cimitir.nume_cimitir, cimitir.parcela
FROM contract inner join concesionar on contract.id_concesionar = concesionar.id_concesionar
inner join mormant on contract.id_mormant = mormant.id_mormant
inner join cimitir on mormant.id_cimitir = cimitir.id_cimitir
where nr_chitanta = '$Input'";
$result = mysqli_query($conn, $query);
$contacts = array();

$i = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $contacts[$i] = array(
			'NrContract' => $row["nr_contract"],
            'Nume' => $row["nume"],
            'Prenume' => $row["prenume"],
			'Cnp' => $row["cnp"],
			'NumarMormant' => $row["numar"],
			'SuprafataMormant' => $row["suprafata"],
			'NumeCimitir' => $row["nume_cimitir"],
			'Parcela' => $row["parcela"]
        );
    }
    $contacts[0] = $i;
} else {
    $contacts[0] = 0;
}

echo json_encode($contacts);