$(document).ready(function(){
    var tablaDatos = $("#datos");
    var route = "http://localhost:8000/generos";
    
    $.get(route, function(res){
       $(res).each(function(key, value){
           tablaDatos.append("<tr><td>"+value.genre+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal' >Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>");
       })
    });
});

function Mostrar(btn){
        
    var route = "http://localhost:8000/genero/"+btn.value+"/edit";
    
    $.get(route, function(res){
       
       $("#genre").val(res.genre);
       $("#id").val(res.id);
        
    });        
}