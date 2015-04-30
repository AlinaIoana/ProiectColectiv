<html>
<head>
	<meta charset="utf-8">
	<title>Rapoarte contracte de concesiune</title>
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
<div class="header"> <h2> Rapoarte contracte de concesiune</h2></div>
<div class="menu"> 
<!-- aici vin legaturile cu celelalte pagini -->
<ul>
	<li><a href="../loginSubmit.php">Inapoi</a></li>
	<li><a href="../logout.php">Delogare</a></li>
	<li><a href="rapoarte.html">Inapoi la Pagina de Rapoarte</a></li>
</ul>

</div>
<div class="body">
<ul>
<br><li><a href="r_c_i_an_curent.php">Rapoarte pentru contractele de concesiune incheiate in anul curent</a></li>
<li><a href="r_c_e_an_curent.php">Rapoarte pentru contractele de concesiune care expira in anul curent</a></li>
<li><a href="r_c_exp.php">Rapoarte pentru contractele de concesiune care au expirat in anii precedenti</a></li>
</ul>

<div class="body">
<form action="cauta.php" method="POST">
	<p>Introduceti anul in care a expirat contractul de concesiune</p>
	<input type="text" name="searchterm" placeholder="Căutare după an..."></br>
	<input type="submit" name="Submit" value="Caută" />
	</br>
</form>
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