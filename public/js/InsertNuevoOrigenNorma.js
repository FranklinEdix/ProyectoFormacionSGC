function enviarDatos(document) {
    var nombre = document.getElementById("nombre").value;
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "{{route('agregarorigen.index')}}",
        data: {nombre:nombre},
        success: function (respuesta) {
            alert(respuesta);
        },
        error: function () {
            alert("ERROR: ELLA NO TE AMA");
        }
    });
    document.getElementById("nombre").value = "";
}
