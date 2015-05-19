<html>
<header>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
      <script type="text/javascript" src="jquery-2.1.3.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("table tr").on('click', function() {
        //alert("You clicked my <tr>!");
		//alert($(this).find('td:eq(0)').text());
		
		$('#forinputs').empty();
		$("#selectati").css("display", "none");		
		$(".input").css("display", "block");
		$("#textforupdate").css("display", "block");
		
		var spanul = document.getElementById('forinputs');
		var lf=document.createElement('br');
		
		var ch = document.createElement('INPUT'); 
		ch.setAttribute('type','text'); 
		ch.setAttribute('value',  $(this).find('td:eq(0)').text());
		ch.setAttribute('name', 'nume');
		
		spanul.appendChild(ch);
		spanul.appendChild(lf);
		lf=document.createElement('br');
		spanul.appendChild(lf);
		
		var ch1 = document.createElement('INPUT'); 
		ch1.setAttribute('type','text'); 
		ch1.setAttribute('value',  $(this).find('td:eq(1)').text());
		ch1.setAttribute('name', 'prenume');
		
		spanul.appendChild(ch1);
		lf=document.createElement('br');
		spanul.appendChild(lf);
		lf=document.createElement('br');
		spanul.appendChild(lf);
		
		var ch2 = document.createElement('INPUT'); 
		ch2.setAttribute('type','text'); 
		ch2.setAttribute('value',  $(this).find('td:eq(2)').text());
		ch2.setAttribute('name', 'adresa');
		
		spanul.appendChild(ch2);
		lf=document.createElement('br');
		spanul.appendChild(lf);
		lf=document.createElement('br');
		spanul.appendChild(lf);
		
		var ch3 = document.createElement('INPUT'); 
		ch3.setAttribute('type','text'); 
		ch3.setAttribute('value',  $(this).find('td:eq(3)').text());
		ch3.setAttribute('name', 'religie');
		
		spanul.appendChild(ch3);
		lf=document.createElement('br');
		spanul.appendChild(lf);
		lf=document.createElement('br');
		spanul.appendChild(lf);
		
		var ch4 = document.createElement('INPUT'); 
		ch4.setAttribute('type','datetime'); 
		ch4.setAttribute('value',  $(this).find('td:eq(4)').text());
		ch4.setAttribute('name', 'data_ora_inmormantarii');
		
		spanul.appendChild(ch4);
		lf=document.createElement('br');
		spanul.appendChild(lf);
		lf=document.createElement('br');
		spanul.appendChild(lf);	
		
		var ch5 = document.createElement('INPUT'); 
		ch5.setAttribute('type','hidden'); 
		ch5.setAttribute('value',  $(this).find('td:eq(5)').text());
		ch5.setAttribute('name', 'id_decedat');
		
		spanul.appendChild(ch5);
		lf=document.createElement('br');
		spanul.appendChild(lf);
		
		
		//hidden inputs to help istoric
		
		var spanul = document.getElementById('forinputs_before');
		
		var ch = document.createElement('INPUT'); 
		ch.setAttribute('type','hidden'); 
		ch.setAttribute('value',  $(this).find('td:eq(0)').text());
		ch.setAttribute('name', 'nume_before');
		
		spanul.appendChild(ch);
		
		var ch1 = document.createElement('INPUT'); 
		ch1.setAttribute('type','hidden'); 
		ch1.setAttribute('value',  $(this).find('td:eq(1)').text());
		ch1.setAttribute('name', 'prenume_before');
		
		spanul.appendChild(ch1);
		
		var ch2 = document.createElement('INPUT'); 
		ch2.setAttribute('type','hidden'); 
		ch2.setAttribute('value',  $(this).find('td:eq(2)').text());
		ch2.setAttribute('name', 'adresa_before');
		
		spanul.appendChild(ch2);
		
		var ch3 = document.createElement('INPUT'); 
		ch3.setAttribute('type','hidden'); 
		ch3.setAttribute('value',  $(this).find('td:eq(3)').text());
		ch3.setAttribute('name', 'religie_before');
		
		spanul.appendChild(ch3);
		
		var ch4 = document.createElement('INPUT'); 
		ch4.setAttribute('type','hidden'); 
		ch4.setAttribute('value',  $(this).find('td:eq(4)').text());
		ch4.setAttribute('name', 'data_ora_inmormantarii_before');
		
		spanul.appendChild(ch4);
		
    });
});
</script>

<style type="text/css">
.input { display: none;}
</style>
</header>
<body>
<div class="menu">
<ul>
	<li><a href="decedati.html">Inapoi la pagina de decedati</a></li>
	<li><a href="../logout.php">Logout</a></li>
	<li><a href="../loginSubmit.php">Inapoi la Pagina Principala</a></li>
</ul>
</div>

<div class="body">

<form method="POST" action="update_decedat.php" name="formular">

 <div id="textforupdate" style="display: none">Modificati datele decedatului: </div><br/>
 
 <span id="forinputs"></span>
 <input type="submit" value="Submit" style="display: none" class="input">

<?php

include("config.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT decedat_id, nume, prenume,adresa,religie,data_ora_inmormantare FROM decedat ";
$myData = mysqli_query($conn,$sql);
// create the table
echo "<h4>Lista tuturor decedatilor</h4>";
echo "<div id='selectati'>Selectati decedatul ale carui date doriti sa le modificati: </div><br/>";
echo "<table border='1' id='table' class='tablesorter'>
<thead>
<tr>
<th>Nume</th>
<th>Prenume &nbsp</th>
<th>Adres&#259</th>
<th>Religie</th>
<th>Data si ora inmormantarii</th>
<th style='display: none'>Id</th>
</tr>
</thead></tbody>
";

 while($record = mysqli_fetch_array($myData)){ 
	echo "<tr>";
	echo "<td>" . $record['nume'] . "</td>";
	echo "<td>" . $record['prenume'] . "</td>";
	echo "<td>" . $record['adresa'] . "</td>";
	echo "<td>" . $record['religie'] . "</td>";
	echo "<td>" . $record['data_ora_inmormantare'] . "</td>";
	echo "<td style='display: none'>" . $record['decedat_id'] . "</td>";
	echo "</tr>";
}
echo "</tbody></table>";
//mysqli_close($conn);

?>

<span id="forinputs_before"></span>


</form>

</div>

</body>
</html>