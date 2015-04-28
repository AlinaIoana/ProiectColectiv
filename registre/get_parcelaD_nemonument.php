<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>
<a href="morminte_nemonument_FARA_BUTOANE.php">Inapoi</a></li>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proiect";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) 
{
    die('Nu ma pot conecta la MySQL !!! : ' . mysql_error());
}

$sql = "SELECT m.numar, m.suprafata, d.nume, d.prenume from mormant m, decedat d where m.id_mormant=d.id_mormant and m.monument LIKE '%NU%' 
and m.id_cimitir in (select c.id_cimitir from cimitir c where c.parcela LIKE '%D%') ";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
     echo "<table><tr><th>numar</th><th>suprafata</th><th>nume</th><th>prenume</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["numar"]. "</td><td> " . $row["suprafata"]. "</td><td>" . $row["nume"]. "</td><td>" . $row["prenume"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>