function Buscar(){

    const busqueda = document.getElementById('param').value;

    const parametro = {
        "nombre" : busqueda
    };
    
    $.ajax({
        data: parametro,
        url: 'ajax/consulta.php',
        type: 'POST',
        success: function(response){
            $("#consulta").html(response);
        }
    });
}



