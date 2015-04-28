<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proiect";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) 
{
    die('Nu ma pot conecta la MySQL : ' . mysql_error());
}

?>

<html>
<head><title>Accesare informatii prin parcela si numar</title></head>
<body>
<div class="header"> <h2>Accesare informatii prin parcela si numar</h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../loginSubmit.php">Inapoi la pagina principala</a></li>
	<li><a href="../logout.php">Delogare</a></li>
	<li><a href="rapoarte.html">Inapoi la pagina de rapoarte</a></li>
</ul>
</div>
<div class="body">
<!-- aici vine tot restul de cod -->

<form method="POST" action="accesare_inf_parcela_nr_do.php" name="formular">

<label class="eticheta">Cimitir</label>

<?php
$sql = "SELECT DISTINCT nume_cimitir FROM cimitir";
$cimitire = mysqli_query($conn, $sql); ?>

<select id="cimitir" onchange="afisare_parcele(this.value)" name = 'cimitir' required>
	<option></option>
<?php if (mysqli_num_rows($cimitire) != 0) {
		while ($row = mysqli_fetch_assoc($cimitire)) { ?>
			<option> <?php echo $row['nume_cimitir']; ?> </option>
<?php		} } ?>
		
</select></br></br>

<label class="eticheta">Parcela</label>
<span id="rez"></span></br></br>

<label class="eticheta">Numarul mormantului</label>
<span id="rez2"></span></br></br>

<script src="../persoane-morminte/validare+cautare.js"></script>
<input type="submit" value="Submit">

</form>

</div>
</body>
</html>