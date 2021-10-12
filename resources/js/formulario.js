$("#for1").submit(function (e) {
    e.preventDefault();
    h = $("#for1").serialize();
    $.ajax({
        type: "get",
        url: "create",
        data: h,
        // dataType: "dataType",
        success: function (response) {
            if (response) {
                $("#for1").trigger("reset");

                $.gritter.add({
                    title: "Registrado",
                    text: "Formulario Concluido",
                    sticky: false,
                    TimeRanges
                });
            } else {
                $.gritter.add({
                    title: "ERROR !!",
                    text: "",
                    sticky: false,
                });
            }
        },
    });
});
