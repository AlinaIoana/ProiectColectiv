<html>
<head>
	<meta charset="utf-8">
	<title>Registru anual de evidenta a contractelor de concesiune</title>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
	<script type="text/javascript" src="jquery-latest.js"></script> 
    <script type="text/javascript" src="jquery.tablesorter.min.js"></script>
	<link rel="stylesheet" href="./themes/blue/style1.css" type="text/css" media="print, projection, screen" />
	<script type="text/javascript">
	$(document).ready(function() 
        { 
            $("#table").tablesorter({sortList: [[3,1],[2,0]]}); 
        } 
    ); 
    
	</script>
</head>
<body>
<div class="header"> <h2> Registru anual de evidenta a contractelor de concesiune</h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../loginSubmit.php">Inapoi</a></li>
	<li><a href="../logout.php">Delogare</a></li>
	<li><a href="registre.html">Inapoi la Pagina de Registre</a></li>
</ul>

</div>
<div class="body">
<ul>
<br><li><a href="toate_contractele.php">Lista tuturor contractelor</a></li>
<li><a href="contract_an_curent.php">Lista contractelor de concesiune din anul curent</a></li>
<li><a href="contract_exp.php">Lista contractelor de concesiune care expira in anul curent</a></li>


</ul>
<?php

// connect to the server

$con = mysqli_connect("localhost","root","");

//connect to the database

mysqli_select_db($con, "proiect");

//query the database

// close connection
mysqli_close($con);

?>



</div>


</body>
</html>