<html>
<head><title>Lista morminte </title></head>
<body>
<div class="header"> <h2>Lista morminte </h2></div>
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
<ul><li><form action="get_parcelaA_nemonument.php" method="POST">
<input type="submit" name="Submit" value="Parcela A"></form></li>
<li><form action="get_parcelaB_nemonument.php" method="POST">
<input type="submit" name="Submit" value="Parcela B"></form></li>
<li><form action="get_parcelaC_nemonument.php" method="POST">
<input type="submit" name="Submit" value="Parcela C"></form></li>
<li><form action="get_parcelaD_nemonument.php" method="POST">
<input type="submit" name="Submit" value="Parcela D"></form></li></ul>
<li>Cimitirul Manastur</li>
<ul>
<li><form action="get_parcelaE_nemonument.php" method="POST">
<input type="submit" name="Submit" value="Parcela E"></form></li>
<li><form action="get_parcelaF_nemonument.php" method="POST">
<input type="submit" name="Submit" value="Parcela F"></form></li>
</ul>
</div>
</body>
</html>
