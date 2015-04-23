<?php

$nume = $_GET['nume'];



$hostname="localhost";
$username="root";
$password="";
$database="proiect";


$conn=mysqli_connect($hostname,$username,$password,$database);
if (!$conn) 
{
    die('Nu ma pot conecta la MySQL !!! : ' . mysqli_error());
}

$sel=mysqli_select_db($conn,$database);
if (!$sel) 
{
	die ("Nu gasesc baza de date !!!");
}

echo "<table>
<tr>
<th>Id mormant</th>

</tr>";

$sql="SELECT id_concesionar FROM concesionar WHERE nume like '$nume%'";
while($result = mysqli_query($conn,$sql))
	{	
		$row=mysqli_fetch_array($result);
		$id_concesionar=$row['id_concesionar'];
		$sql1="select id_mormant from contract where id_concesionar='$id_concesionar'";
		$result1=mysqli_query($conn,$sql1);
		while($row1 = mysqli_fetch_array($result1))
		{
			echo "<tr>";
			echo "<td>" . $row1['id_mormant'] . "</td>";
			echo "</tr>";
		}
	
	}
echo "</table>";
mysqli_close($conn);
?>