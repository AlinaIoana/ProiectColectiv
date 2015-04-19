<!DOCTYPE html>
<html>

<head>
    <title>Cautare decedat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="jquery-latest.js"></script> 
	 <script type="text/javascript" src="jquery-2.1.3.js"></script>
    <script type="text/javascript" src="searchDFA.js"></script>
    <script type="text/javascript" src="jquery.tablesorter.js"></script>
    <script type="text/javascript" src="jquery.tablesorter.min.js"></script>
	<link rel="stylesheet" href="./themes/blue/style1.css" type="text/css" media="print, projection, screen" />
	<script type="text/javascript">
	$(document).ready(function() 
        { 
            $("#rez").tablesorter({sortList: [[3,1],[2,0]]}); 
        } 
    ); 
    </script>
</head>

<body>
<div class="header"> <h2> Registrul anual de evidenta a decedatilor fara apartinatori</h2></div>
<br>
<ul>
<li><a href="Registru_decedati_faraA.php">Înapoi la registru anual de evidenta a decedatilor fara apartinatori</a></li>
</ul>
<br>
<div id="Search">
<p>Cautare decedat fara apartinator</p>

<input class="input" "type="text"><br>
<br>
<br>
<table border = "3" id="rez" class="tablesorter">

</table>
</div>
<br>

</body>
</html>