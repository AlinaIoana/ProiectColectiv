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
                var content = "<thead><tr><th>Nume &nbsp </th><th>Prenume</th><th>Adresa</th><th>Religie</th><th>Data si ora inmormantarii</th></tr></thead>";
                content += "<tbody>";
                for (var i = 1; i <= contact[0]; i++) {
                    content += "<tr><td id='Nume' >" +contact[i].Nume + "</td>";
                    content +=  "<td id='Prenume' >" +contact[i].Prenume + "</td>";
                    content +=  "<td id='Adresa' >" +contact[i].Adresa + "</td>";
                    content +=  "<td id='Religie' >" +contact[i].Religie + "</td>";
                    content += "<td id='data_ora_inmormantare' >" +contact[i].data_ora_inmormantare + "</td></tr>";
                }
                content += "</tbody>";
                $("table#rez").html(content);
                $("#rez").tablesorter();
            });
    });



        $("#myTable").tablesorter();
});
