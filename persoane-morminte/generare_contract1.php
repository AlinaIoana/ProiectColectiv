<?php
$cnp1=$_POST['cnp1'];
$cnp2=$_POST['cnp2'];


$cimitir=$_POST['cimitir'];
$parcela=$_POST['parcela'];
$nr_mormant=$_POST['nr_mormant'];
$nr_contract=$_POST['nr_contract'];
$nr_chitanta=$_POST['nr_chitanta'];
$cerere=$_POST['id_cerere'];

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
$query="select nume,prenume,adresa from concesionar where cnp='$cnp1'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);

	$nume1=$row['nume'];
	$prenume1=$row['prenume'];
	$adr1=$row['adresa'];
	
$query1="select nume,prenume,adresa from concesionar where cnp='$cnp2'";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($result1);

	$nume2=$row1['nume'];
	$prenume2=$row1['prenume'];
	$adr2=$row1['adresa'];
	
$query2="select data_inregistrare from cerere where id_cerere='$cerere'";
$result2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_array($result2);
	$data_cerere=$row2['data_inregistrare'];	
$data=date("d-m-Y");
$data1=date("d-m");
?>
<html>
<body>
<div class="header">
<h2>CONTRACT DE CONCESIUNE</h2>
<h3>NR <?php echo $nr_contract."/".$data; ?></h3>
</div>

<div class="body">
<p>
	I. Partile contractante<br></br>
	
    Art. 1. Municipiul CLUJ - NAPOCA prin Serviciul Administrare Cimitire Domeniul Public cu sediul in municipiul Cluj - Napoca,
    str. Avram Iancu nr. 26-28, telefon 0264.454.421, reprezentant de primar Emil Boc in calitate de concedent, pe de o parte, si 
    D-nul/D-na <?php echo $nume1." ".$prenume1; ?> , CNP <?php echo $cnp1; ?>, cu domiciliul in <?php echo $adr1;?> si 
	D-nul/D-na <?php echo $nume2." ".$prenume2; ?> , CNP <?php echo $cnp2; ?>, cu domiciliul in <?php echo $adr2;?> , in calitate 
	de concesionar pe de alta parte.
	In temeiul OUG nr. 54/2006 privind regimul contractelor de concesiune de bunuri proprietate publica, aprobata cu modificari prin 
	Legea nr. 22/2007 si in conformitate cu HCL nr.300/2014 s-a incheiat prezentul contract de concesiune in urmatoarele conditii:
	<br></br>
	
	II. Obiectul contractului de concesiune<br></br>
	Art. 2. Obiectul contractului este concesionarea locului de inhumare situat in cimitirul <?php echo $cimitir; ?>,
	parcela <?php echo $parcela; ?>, nr. <?php echo $nr_mormant; ?>.<br></br>
	
	III. Termenul<br></br>
    Art. 3. Durata concesiunii este de 20 de ani, pentru perioada  2015-2035
    Art. 4. Durata contractului de concesiune poate fi prelungita, prin act aditional, in favoarea concesionarului sau 
	a mostenitorilor acestuia pentru o perioada de inca 20 de ani, cu plata taxei de reconcesionare pana in data de
	<?php echo $data1; ?> a anului urmator anului in care expira durata contractului.<br></br>
	IV. Redeventa
	Art. 5. Redeventa este de 100 lei/m2/20 de ani reprezentand plata concesiunii, 10 lei/m2/an reprezentand plata 
	intretinerii cimitirului si 50 lei taxa de transcriere, conform HCL nr. 76/2010 si a fost achitata anticipat 
	cu chitanta nr. <?php echo $nr_chitanta; ?> in baza:<br></br>
	&#149	cererii nr. <?php echo $cerere."/".$data_cerere; ?>  inregistrata la registratura Primariei Cluj-Napoca.<br></br>
	&#149	adeverintei de inhumare  nr______  emisa de Primaria Cluj-Napoca.<br></br>
	&#149	reconcesionării cu prezentarea fotografiei locului de inhumare.<br></br>
	
	V. Plata redeventei<br></br>
Art. 6. Plata redeventei se face in numerar la casieria Serviciului Administrare Cimitire Domeniul Public.
Art. 7. Neplata redeventei sau executarea cu intarziere a acestei obligatii conduce la incetarea concesionarii.<br></br>
VI. Drepturile partilor<br></br>
Drepturile concesionarului<br></br>
Art. 8 Concesionarul are dreptul de a exploata in mod direct, pe riscul si pe raspunderea sa, bunul proprietate publica
 ce face obiectul contractului de concesiune.
Art. 9 Dreptul de concesiune asupra locului de inhumare se poate transmite prin mostenire legala sau testamentara
 sau prin donatie, in conditiile prevazute in Regulamentul de organizare si functionare a cimitirelor apartinand 
 domeniului public aprobat prin HCL nr. 300/2014. <br></br>
Drepturile concedentului<br></br>
Art. 10 Concedentul are urmatoarele drepturi:<br></br>
-	sa inspecteze bunul concesionat, verificand respectarea obligatiilor asumate de concesionar;<br></br>
-	sa modifice in mod unilateral partea reglementara a contractului de concesiune, din motive exceptionale 
	legate de interesul national sau local;<br></br>
-	sa incaseze redeventa. <br></br>
VII. Obligatiile partilor <br></br> 
Obligatiile concesionarului <br></br>
Art. 11 Concesionarii au urmatoarele obligatii:<br></br>
a)	sa cunoasca si sa respecte intocmai Regulamentul de organizare si functionare a cimitirelor apartinand 
	domeniului public si aflate in administrarea Consiliului Local al municipiului Cluj-Napoca;<br></br>
b)	sa efectueze lucrarile de constructii funerare doar in baza avizelor/autorizatiei prevazute de lege;<br></br>  
c)	sa instaleze un insemn care sa contina numele si prenumele decedatului sau al concesionarului,
	dupa caz, de la data luarii in folosinta;<br></br>
d)	sa edifice o bordura din piatra/ciment care sa delimiteze perimetrul locului de inhumare, in termen de sase
	luni de la concesionare;<br></br>
e)	sa asigure lizibilitatea inscrierilor de pe placile si tablele comemorative;<br></br>
f)	sa ingrijeasca permanent locul de inhumare, sa intretina constructiile de orice fel existente la locul de 
	inhumare precum si cararile dintre morminte si aleile secundare de acces in parcele;
</p>
</div>
</body>
</html>