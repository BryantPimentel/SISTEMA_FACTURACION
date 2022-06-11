$('#dataTableIn').DataTable({
    "order": [[ 2, "desc" ]],
});


$(function () {
    $('.datepicker').datepicker({format: 'dd/mm/yyyy',});

    $(".stockInNew").click(function(){
        $('#stockInForm')[0].reset();
        $("#StockInTable tbody").html("");
    });

    $('.stockInEdit').each(function(){
        var id = $(this).data('id');
        $(this).click(function(){
            $.ajax({
                url: 'in/get_id',
                type: 'post',
                data: {id: id},
                dataType: 'json',
                success: function (result) {
                    var data = result[0];
                    $("#id").val(data.id);
                    $("#documento_id").val(data.documento_id);
                    $("#proveedor_id").val(data.proveedor_id);
                    $("#bodega_id").val(result.detail[0].bodega_id).trigger('change');
                    $("#fecha").val(getFormattedDate(data.fecha));
                    $("#numero").val(data.numero);
                    $("#nit").val(data.nit);
                    $("#nombre").val(data.nombre);
                    $("#total").val(data.total);
                    $("#observ").val(data.observ);
                    if (data.sta=="1") {
                        $("#sta1").prop("checked", true);
                        $("#sta0").prop("checked", false);
                    }
                    else {
                        $("#sta0").prop("checked", true);
                        $("#sta1").prop("checked", false);
                    }

                    $("#StockInTable tbody").html("");
                    $.each(result.detail, function(i, item) {
                        // console.info('item',item);
                        j = addStockIn();
                        $('#stockIn-producto_id-'+j).select2("trigger", "select", {
                            data: { id: item.producto_id, text: item.descrip }
                        });
                        $("#stockIn-cantidad-"+j).val(item.cantidad);
                        $("#stockIn-precio-"+j).val(item.precio);
                        $("#stockIn-total-"+j).val(item.importe);
                    });
                },
            });
        })
    });

    $('.stockInDelete').each(function(){
        var id = $(this).data('id');
        $(this).click(function(){
            $("#delete_id").val(id);
        })
    });
});


var a = 0;

$("#addStockIn").click(function(){
    addStockIn();
});



function addStockIn(){
    var tr = "<tr id=\"stockIn-"+a+"\" class=\"stockIn-row\" data-id="+a+">";
    tr += "<td><select name='producto_id' id='stockIn-producto_id-"+a+"' class='form-control'></select></td>";
    tr += "<td><input type=\"text\" class=\"form-control\" name=\"cantidad\" id=\"stockIn-cantidad-"+a+"\" placeholder='0.00' onblur='calculaStockIn("+a+");' style=\"text-align:right;\"/></td>";
    tr += "<td><input type=\"text\" class=\"form-control\" name=\"precio\" id=\"stockIn-precio-"+a+"\" placeholder='0.00' onblur='calculaStockIn("+a+");' style=\"text-align:right;\" /></td>";
    tr += "<td><input type=\"text\" class=\"form-control\" name=\"total\" id=\"stockIn-total-"+a+"\" readonly style=\"text-align:right;\"/></td>";
    tr += "<td><a href=\"#\" onclick=\"removeStockIn("+a+"); return false;\"><i class=\"fa fa-remove fa-lg\"></i></a></td>";
    tr += "</tr>";

    $("#StockInTable tbody").append(tr);


    $('#stockIn-producto_id-'+a).select2({
        placeholder: 'Buscar producto...',
        ajax: {
            url: 'in/get_products',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    }).width("100%");

    a++;
    return a-1;
};

function removeStockIn(b){
    $("#stockIn-"+b).remove();
    a--;
}

function jsonStockIn(){
    if(a==0){
        alert("Debe de agregar al menos un producto");
        return false;
    }else{
        var jsonReturn = [];
        $.each( $(".stockIn-row"), function( key, objRow ) {
            var tmpId = $(this).data('id');

            jsonReturn.push({
                producto_id: $("#stockIn-producto_id-"+tmpId).val(),
                descrip: $("#stockIn-producto_id-"+tmpId).text(),
                cantidad: $("#stockIn-cantidad-"+tmpId).val(),
                precio: $("#stockIn-precio-"+tmpId).val(),
                total: $("#stockIn-total-"+tmpId).val()
            });
        });
        // console.log(JSON.stringify(jsonReturn));
        $("#stockIn_submit").val(JSON.stringify(jsonReturn));
        return true;
    }
};


function calculaStockIn(c){
    var cantidad = $("#stockIn-cantidad-"+c).val();
    var precio = $("#stockIn-precio-"+c).val();
    var totalDet = (parseFloat(cantidad) * parseFloat(precio));
    var total = 0.00;
    $("#stockIn-total-"+c).val(totalDet);

    $.each( $(".stockIn-row"), function( key, objRow ) {
        var tmpId = $(this).data('id');
        total += parseFloat($("#stockIn-total-"+tmpId).val());
    });

    $("#total_general").val(total);
    return true;
}

function getFormattedDate(due_date) {
    var date = new Date(due_date);
    var year = date.getFullYear();

    var month = (1 + date.getMonth()).toString();
    month = month.length > 1 ? month : '0' + month;

    var day = date.getDate().toString();
    day = day.length > 1 ? day : '0' + day;

    return day + '/' + month + '/' + year;
}