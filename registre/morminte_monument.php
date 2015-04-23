<html>
<head><title>Lista morminte monument</title></head>
<body>
<div class="header"> <h2>Lista morminte monument </h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../logout.php">Delogare</a></li>     
        <li><a href="registre.html">Registre</a></li> 
	
</div>
<div class="body">
<!-- aici vine tot restul de cod -->
<ul>
<li>Cimitirul Central</li>
<ul><li><form action="get_parcelaA.php" method="POST">
<input type="submit" name="Submit" value="Parcela A"></form></li>
<li><form action="get_parcelaB.php" method="POST">
<input type="submit" name="Submit" value="Parcela B"></form></li>
<li><form action="get_parcelaC.php" method="POST">
<input type="submit" name="Submit" value="Parcela C"></form></li>
<li><form action="get_parcelaD.php" method="POST">
<input type="submit" name="Submit" value="Parcela D"></form></li></ul>
<li>Cimitirul Manastur</li>
<ul>
<li><form action="get_parcelaE.php" method="POST">
<input type="submit" name="Submit" value="Parcela E"></form></li>
<li><form action="get_parcelaF.php" method="POST">
<input type="submit" name="Submit" value="Parcela F"></form></li>
</ul>
</div>
</body>
</html>
