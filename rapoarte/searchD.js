$(document).ready(function () {
    $("input").on("input", function() {
        var dInput = this.value;

        var input = { text: dInput };
        $.ajax({
            type: "Post",
            url: "cauta_d.php",
            data: input
        })
            .done(function (data) {
                var contact = JSON.parse(data);
                var content = "<thead><tr><th>NrContract</th><th>Nume</th><th>Prenume</th><th>Cnp</th><th>NumarMormant</th><th>SuprafataMormant</th><th>NumeCimitir</th><th>Parcela</th></tr></thead>";
                content += "<tbody>";
                for (var i = 1; i <= contact[0]; i++) {
					content += "<tr><td id='NrContract' >" + contact[i].NrContract + "</td>";
                    content += "<td id='Nume' >" +contact[i].Nume + "</td>";
					content += "<td id='Prenume' >" +contact[i].Prenume + "</td>";					
					content += "<td id='Cnp' >" +contact[i].Cnp + "</td>";
					content += "<td id='NumarMormant' >" +contact[i].NumarMormant + "</td>";
					content += "<td id='SuprafataMormant' >" +contact[i].SuprafataMormant + "</td>";
					content += "<td id='NumeCimitir' >" +contact[i].NumeCimitir + "</td>";
                    content +=  "<td id='Parcela' >" +contact[i].Parcela + "</td></tr>";
                }
                content += "</tbody>";
                $("table#rez").html(content);
                $("#rez").tablesorter();
            });
    });



        $("#myTable").tablesorter();
});
