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

$query = "SELECT * FROM decedat_fara_apartinator WHERE nume LIKE '%$Input%' OR prenume LIKE '%$Input%' OR nr_adeverinta LIKE '%$Input%' OR nr_solicitare LIKE '%$Input%' OR id_mormant LIKE '%$Input%' OR data_ora_inmormantare LIKE '%$Input%' ";
$result = mysqli_query($conn, $query);
$contacts = array();

$i = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $contacts[$i] = array(
            'Nume' => $row["nume"],
            'Prenume' => $row["prenume"],
            'Nr_adeverinta' => $row["nr_adeverinta"],
            'Nr_solicitare' => $row["nr_solicitare"],
            'Id_mormant' => $row["id_mormant"],
			'data_ora_inmormantare' => $row["data_ora_inmormantare"],
        );
    }
    $contacts[0] = $i;
} else {
    $contacts[0] = 0;
}

echo json_encode($contacts);