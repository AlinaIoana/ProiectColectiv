<?php
	
$serverName = "localhost";
$userName = "root";
$dbPassword = "";
$dbName = "proiect";

$Input = $_POST['text'];
//$input2 = $_POST['id'];
$Input=trim($Input);
$Input = stripslashes($Input);
$Input = htmlspecialchars($Input);

$conn= mysqli_connect($serverName, $userName, $dbPassword) or die(mysql_error());
mysqli_select_db($conn,$dbName) or die(mysql_error());

$query = "SELECT numar, suprafata FROM mormant WHERE parcela = '%$Input%' "; //"AND cimitir = '$input2' ";
$result = mysqli_query($conn, $query);
$contacts = array();

$i = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $contacts[$i] = array(
            'Numar' => $row["numar"],
            'Suprafata' => $row["suprafata"],
            
        );
    }
    $contacts[0] = $i;
} else {
    $contacts[0] = 0;
}

echo json_encode($contacts);