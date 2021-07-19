    $(document).ready(function(){
    $("#formulario").keyup(function(){
    _this = this;
    // Show only matching TR, hide rest of them
    $.each($("#mytable tbody tr"), function() {
    if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
    {
        $(this).hide();
    }
    else
    {
        $(this).show();
    }
    });
    });
   });

/*Abrir doc para previsualizar*/

function AbrirDoc(id) {
    document.getElementById('MostrarDoc').innerHTML = "<h1>"+id+"</h1> <p>Aquí ira el doc xD</p> <br> <button class='btn btn-success' id='Check' onclick='verificar(this.id)'>Validar</button>";
}
/*------------------------*/

/*Para validar documento*/
function verificar(id){
    console.log(id);
    document.getElementById(id).style.background = 'red';

}

/*---------------------------*/                                                                                                                             l2