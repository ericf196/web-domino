$(document).ready(function () {

    $('#submit_tabla').click(function () {
        console.log("funcionando submit table");
        var myTab = document.getElementById('table_super_polla');

        var values = [];
        var currentRow = 0;
        var obj = '[';

        var header = 1;

        var rowLength = myTab.rows.length - 1;

        for (row = 1; row < rowLength; row++) {

            obj = obj + '{';
            var cellLength = myTab.rows[row].cells.length - 1;
            for (c = 1; c < myTab.rows[row].cells.length; c++) {
                var headers = myTab.rows.item(0).cells[header];
                var element = myTab.rows.item(row).cells[c];
                header++;
                obj = obj + '"' + headers.childNodes[0].value + '" : "' + element.childNodes[0].value + '"';

                if (header <= cellLength) {
                    obj = obj + ','
                }
            }
            if (row != rowLength - 1) {
                obj = obj + '},';
                header = 1;
            } else {
                obj = obj + '}';
            }

        }
        obj = obj + ']';
        console.log(obj);

        var div_resul = "notificacion_tabla";
        // $("#submit_tabla").attr("disabled", "disabled");

        $.ajax({
            // la URL para la petición
            url: '/sent_table',
            data: obj,
            type: 'POST',
            dataType: 'json',

            /*beforeSend: function () {
             $("#" + div_resul + "").html($("#cargador_empresa").html());
             $('button[type=submit]').attr("disabled", "disabled");
             },*/
            success: function (resul) {
                $("#" + div_resul + "").html(resul);
            },
            error: function (xhr, status) {
                $("#" + div_resul + "").html('Ha ocurrido un error, revise su conexion e intentelo nuevamente');
            },
            complete: function () {
                /*$('button[type=submit]').removeAttr("disabled");
                 $("#" + quien)[0].reset();*/
            }

        });
    });


});