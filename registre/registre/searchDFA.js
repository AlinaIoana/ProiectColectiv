$(document).ready(function () {
    $("input").on("input", function() {
        var dInput = this.value;

        var input = { text: dInput };
        $.ajax({
            type: "Post",
            url: "cauta_dfaraA.php",
            data: input
        })
            .done(function (data) {
                var contact = JSON.parse(data);
                var content = "<thead><tr><th>Nume &nbsp </th><th>Prenume</th><th>Nr_adeverinta</th><th>Nr_solicitare</th><th>Data si ora inmormantarii</th></tr></thead>";
                content += "<tbody>";
                for (var i = 1; i <= contact[0]; i++) {
                    content += "<tr><td id='Nume' >" +contact[i].Nume + "</td>";
                    content +=  "<td id='Prenume' >" +contact[i].Prenume + "</td>";
                    content +=  "<td id='Nr_adeverinta' >" +contact[i].Nr_adeverinta + "</td>";
                    content +=  "<td id='Nr_solicitare' >" +contact[i].Nr_solicitare + "</td>";
			
                    content += "<td id='data_ora_inmormantare' >" +contact[i].data_ora_inmormantare + "</td></tr>";
                }
                content += "</tbody>";
                $("table#rez").html(content);
                $("#rez").tablesorter();
            });
    });



        $("#myTable").tablesorter();
});
