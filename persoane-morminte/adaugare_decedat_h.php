<!--    Versiunea 1.0 : Nu contine validari de input-uri!    -->

<?php
include("config.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>

<html>
<head>
<title>Decedati</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.min.css">
<link rel="stylesheet" href="jquery.ui.timepicker.css">

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="jquery.ui.timepicker.js"></script>
    <script src="time_picker.js"></script>

  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
	/*$( "#datepicker" ).val( function( index, val ) {
		return val + "01";
	});
	var input = $( "#datepicker" );
	input.val( input.val() + "more text" );*/

  });
  </script>
</head>

<body>
<div class="header">
<h2>Adaugare unui decedat</h2>
</div>

<div class="menu">
	<a href="decedati.html">Decedati</a>
	<a href="../logout.php">Delogare</a>
</div>

<div class="body">
<form method="POST" action="adaugare_decedat.php" name="formular">

<label class="eticheta">Nume</label>
<input class="input" type="text" name="nume" required></br></br>

<label class="eticheta">Prenume</label>
<input class="input" type="text" name="prenume" required></br></br>

<!-- <label class="eticheta">CNP</label>
<input class="input" type="number" name="cnp" onchange="" required></br></br> 
-->

<label class="eticheta">Domiciliu</label>
<input class="input" type="text" name="domiciliu" required></br></br>

<label class="eticheta">Religie</label>
<input class="input" type="text" name="religie" required></br></br>

<label class="eticheta">Cimitir</label>
<!-- <input class="input" type="text" name="cimitir" required></br></br> -->

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
<!-- <input class="input" type="text" name="parcela" required></br></br> -->
<span id="rez"></span></br></br>

<label class="eticheta">Numarul mormantului</label>
<!--<input class="input" type="number" name="numar" required></br></br>-->
<span id="rez2"></span></br></br>

<label class="eticheta">Data inmormantarii</label>
<input class="input" id="datepicker" type="datetime" name="data" required></br></br>

<label class="eticheta">Ora inmormantarii</label>
<input class="input" id="timepicker" type="text" name="time" required></br></br>





<script src="validare+cautare.js"></script>
<script src="jquery.ui.timepicker.js"></script>
<input type="submit" value="Submit">


</form>
</div>
</body>

</html>