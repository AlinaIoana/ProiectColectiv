function validare_cnp(cnp)
{
	
	if(cnp.toString().length>13 || cnp.toString().length<13)
		alert("Cnp-ul contine mai mult sau mai putin de 13 cifre!")
	
	return false;	
}
function afisare_parcele(str)
{
	if (str == "")
	{
        document.getElementById("rez").innerHTML = "";
        return;
    } else
	{ 
        if (window.XMLHttpRequest) 
		{
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else 
		{
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
		{
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
			{
                document.getElementById("rez").innerHTML = xmlhttp.responseText;
            }
        }
		
        xmlhttp.open("GET","get_parcela.php?denumire="+str,true);
        xmlhttp.send();
    }
}
function afisare_numar(str)
{
if (str == "") {
        document.getElementById("rez2").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("rez2").innerHTML = xmlhttp.responseText;
            }
        }
		var denumire_cimitir;
		denumire_cimitir=document.getElementById("cimitir").value;
		
        xmlhttp.open("GET","get_numar.php?denumire="+denumire_cimitir+"&parcela="+str,true);
        xmlhttp.send();
    }
}
function validare_nr_contract(nr)
{
	if (nr == "") {
        document.getElementById("rez4").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("rez4").innerHTML = xmlhttp.responseText;
            }
        }
		
        xmlhttp.open("GET","validare_nr_contract.php?nr_contract="+nr,true);
        xmlhttp.send();
    }

}
function validare_chitanta(nr)
{
		if (nr == "") {
        document.getElementById("rez5").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("rez5").innerHTML = xmlhttp.responseText;
            }
        }
		
        xmlhttp.open("GET","validare_nr_chitanta.php?nr_chitanta="+nr,true);
        xmlhttp.send();
    }

}
function get_id_cerere(cnp)
{
		if (cnp == "") {
        document.getElementById("rez6").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("rez6").innerHTML = xmlhttp.responseText;
            }
        }
		
        xmlhttp.open("GET","get_id_cerere.php?cnp="+cnp,true);
        xmlhttp.send();
    }

}
function modifica_stadiul_cererii(id_cerere)
{
		if (id_cerere == "") {
        document.getElementById("rez7").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("rez7").innerHTML = xmlhttp.responseText;
            }
        }
		
        xmlhttp.open("GET","modifica_cerere.php?id_cerere="+id_cerere,true);
        xmlhttp.send();
    }

}

function get_concesionar(cnp)
{
		if (cnp == "") {
        document.getElementById("rez7").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("rez7").innerHTML = xmlhttp.responseText;
            }
        }
		
        xmlhttp.open("GET","modificare_concesionar.php?cnp="+cnp,true);
        xmlhttp.send();
    }

}

function modifica_concesionar()
{	
var cnp=document.getElementById("cnp").value;
		if (cnp == "") {
        document.getElementById("rez8").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("rez8").innerHTML = xmlhttp.responseText;
            }
        }
		var nume;
		nume=document.getElementById("nume").value;
		var prenume;
		prenume=document.getElementById("prenume").value;
		var adresa;
		adresa=document.getElementById("adresa").value;
        xmlhttp.open("GET","modificare_date_concesionar.php?cnp="+cnp+"&nume="+nume+"&prenume="+prenume+"&adresa="+adresa,true);
        xmlhttp.send();
    }

}
function morminte_dupa_nume(nume)
{
		if (nume == "") {
        document.getElementById("rez10").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("rez10").innerHTML = xmlhttp.responseText;
            }
        }
		
        xmlhttp.open("GET","get_morminte_dupa_nume.php?nume="+nume,true);
        xmlhttp.send();
    }

}