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