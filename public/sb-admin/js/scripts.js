$(function(){
    //loadPins();
});

// Function to show all pins
function loadPins(){
    var tablaDatos = $("#datos");
    var route = "http://mitutorialdigital.app/admin/getpins";

    $("#datos").empty();
    $.get(route, function(res){
        $(res).each(function(key,value){
            var status = (value.active) ? '<i class="fa fa-check text-success" title="PIN libre"></i>' : '<i class="fa fa-times text-danger" title="PIN usado"></i>';
            tablaDatos.append(
                '<tr>' +
                    '<td>'+value.id+'</td>' +
                    '<td>'+value.pin+'</td>' +
                    '<td>'+value.created_at+'</td>' +
                    '<td>'+value.updated_at+'</td>' +
                    '<td>'+status+'</td>' +
                    '<td>' +
                        '<button value="'+value.id+'" OnClick="editPin(this);" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Editar</button> ' +
                        '<button value="'+value.id+'" OnClick="deletePin(this);" class="btn btn-danger btn-xs">Eliminar</button>' +
                    '</td>' +
                '</tr>'
            );
        });
    });
}

function editPin(btn){
    var route = "http://mitutorialdigital.app/admin/pins/"+btn.value+"/edit";

    $.get(route, function(res){
        $("#pin").val(res.pin);
        $("#id").val(res.id);
    });
}

function deletePin(btn){
    var route = "http://mitutorialdigital.app/admin/pins/"+btn.value+"";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function(){
            //loadPins();
            /*$("#msj-success").fadeIn(function () {
                $(this).find('.message').html('PIN eliminado satisfactoriamente!!');
            });*/
            $("#msj-success").fadeIn();
        }
    });
}

$("#actualizar").click(function(){
    var value = $("#id").val();
    var dato = $("#pin").val();
    var route = "http://mitutorialdigital.app/admin/pins/"+value+"";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {genre: dato},
        success: function(){
            $("#msj-success").fadeIn();
        },
        error: function(xhr, textStatus, errorThrown){
            alert('request failed');
        }
    });
});