$(document).ready(function () {
    $("input").on("click", function() {
        var parcela = this.value;
		//var cimitir = this.id;

        var inputp = { text: parcela };
		//var inputc = { text: cimitir };
        $.ajax({
            type: "Post",
            url: "cauta_d.php",
            data: inputp
        })
            .done(function (data) {
                var contact = JSON.parse(data);
                var content = "<thead><tr><th>Numar &nbsp </th><th>Suprafara</th></tr></thead>";
                content += "<tbody>";
                for (var i = 1; i <= contact[0]; i++) {
                    content += "<tr><td id='Numar' >" +contact[i].Nume + "</td>";
                    content +=  "<td id='Suprafata' >" +contact[i].Suprafata + "</td>";
                    
                }
                content += "</tbody>";
                $("table#rez").html(content);
                $("#rez").tablesorter();
            });
    });



        $("#myTable").tablesorter();
});
