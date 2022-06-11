<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Neon is a Responsive Bootstrap 4 Admin Dashboard Template">
    <meta name="keywords"
        content="admin, admin template, admin panel, dashboard template, ui kits, web app, crm, cms, responsive, bootstrap 4, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inversiones al Detalle S.A</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('images/inversiones/user.png') }}" alt="Inversiones al Detalle S.A">

    <!-- Start CSS -->
    <!-- Chartist Chart CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/chartist-js/chartist.min.css') }}">

    <!-- DataTables CSS -->
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive Datatable CSS -->
    <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Datepicker CSS -->
    <link href="{{ asset('plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">


    <!-- End CSS -->

</head>

<body class="xp-vertical">
    @guest

    <main class="main">
        @yield('content')
    </main>

    @else
    <!-- Start XP Container -->
    <div id="xp-container">

        <!-- Start XP Leftbar -->
        <div class="xp-leftbar">

            <!-- Start XP Sidebar -->
            <div class="xp-sidebar">

                <!-- Start XP Logobar -->
                <div class="xp-logobar text-center">
                    <a href="{{ url('/') }}" class="xp-logo"><img src="{{ asset('images/inversiones/logo.png') }}"
                            width="225" height="80" alt="Inversiones al Detalle S.A"></a>
                </div>
                <!-- End XP Logobar -->

                <!-- Start XP Navigationbar -->
                <div class="xp-navigationbar">
                    <ul class="xp-vertical-menu">
                        </br>

                        <li class="xp-vertical-header "><i class="icon-layers"></i> Home</li>

                        <li>
                            <a href="{{ url('/') }}">
                                <i class="icon-home"></i><span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/product') }}">
                                <i class="fa fa-tags"></i><span>Productos</span>
                            </a>
                        </li>
                        

                        <li>
                            <a href="{{ url('/csv') }}">
                                <i class="ion ion-ios-albums"></i><span>Archivos Subidos</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/bodega') }}">
                                <i class="fa fa-inbox"></i><span>Bodega</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/proveedor') }}">
                                <i class="fa fa-truck"></i><span>Proveedor</span>
                            </a>
                        </li>

                        <li>
                            <a href="javaScript:void();">
                                <i class="icon-social-dropbox"></i><span>Operaciones</span><i
                                    class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">

                                <li>
                                    <a href="{{ url('/ingreso_mercaderia') }}">
                                        <i class="mdi mdi-arrow-left-bold-circle-outline"></i>
                                        <span> Entrada de Inventario</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/egreso_mercaderia') }}">
                                        <i class="mdi mdi-arrow-right-bold-circle-outline"></i>
                                        <span> Salida de Inventario</span>
                                    </a>
                                </li>
                           

                         
                                <li>
                                    <a href="{{ url('/import') }}">
                                        <i class="ti-import"></i>
                                        <span> Importar Productos</span>
                                    </a>
                                </li>
                         
                            </ul>
                        
                            <!--
                            <li>
                            <a href="javaScript:void();">
                                <i class="icon-social-dropbox"></i><span>Reportes</span><i
                                    class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">

                                <li>
                                    <a href="{{ url('/existencia') }}">
                                        <i class="mdi mdi-arrow-left-bold-circle-outline"></i>
                                        <span> EXistencia</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/egreso_mercaderia') }}">
                                        <i class="mdi mdi-arrow-right-bold-circle-outline"></i>
                                        <span> Kardex</span>
                                    </a>
                                </li>
                            </ul>    
                        </li>
                        </br>
                        -->

                        <li class="xp-vertical-header "><i class="icon-settings"></i> Configuraciónes</li>
                        <!-- <li>
                        <a href="{{ url('747') }}">
                            <i class="icon-grid"></i><span>Menu</span>
                        </a>
                        
                        </li>-->
                        <li>
                            <a href="{{ url('/users') }}">
                                <i class="icon-user"></i><span>Usuarios</span>
                            </a>
                        </li>
                        
                        <!--
                        <li>
                            <a href="{{ url('/roles') }}">
                                <i class="icon-key"></i><span>Roles</span>
                            </a>
                        </li>
                        -->
                        
                    </ul>
                </div>
                <!-- End XP Navigationbar -->

            </div>
            <!-- End XP Sidebar -->

        </div>
        <!-- End XP Leftbar -->

        <!-- Start XP Rightbar -->
        <div class="xp-rightbar">

            <!-- Start XP Topbar -->
            <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <a class="xp-menu-hamburger" href="javascript:void();">
                                <i class="icon-menu font-20 text-white"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-11 col-lg-11 order-1 order-md-2">
                        <div class="xp-profilebar text-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="xp-search">

                                    </div>
                                </li>

                                <li class="list-inline-item mr-0">
                                    <div class="dropdown xp-userprofile">
                                        <a class="dropdown-toggle" href="" role="button" id="xp-userprofile"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('images/inversiones/user.png') }}" alt="user-profile"
                                                class="rounded-circle img-fluid">
                                            <span class="xp-user-live"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">
                                            <a class="dropdown-item" href=""
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                                    class="icon-power text-danger mr-2 "></i> Logout</a>
                                        </div>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div>
                <!-- End XP Row -->

            </div>
            <!-- End XP Topbar -->

            <!-- Start XP Breadcrumbbar -->
            <div class="xp-breadcrumbbar">
                <div>
                    @yield('alert')
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class=" ">
                            Bienvenido {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="xp-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="xp-content mt-2 ml-4 mr-4">
                @yield('content')
            </div>


        </div>
        <!-- End XP Rightbar -->

    </div>
    <!-- End XP Container -->

    @endguest

    <!-- Start JS -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    <script src="{{ asset('js/detect.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.full.min.js"
        integrity="sha256-vucLmrjdfi9YwjGY/3CQ7HnccFSS/XRS1M/3k/FDXJw=" crossorigin="anonymous"></script>

    <!-- Chartist Chart JS -->
    <script src="{{ asset('plugins/chartist-js/chartist.min.js') }}"></script>
    <script src="{{ asset('plugins/chartist-js/chartist-plugin-tooltip.min.js') }}"></script>

    <!-- To Do List JS -->
    <script src="{{ asset('js/init/to-do-list-init.js') }}"></script>

    <!-- Datepicker JS -->
    <script src="{{ asset('plugins/datepicker/datepicker.min.js') }}"></script>
    <script src="{{ asset('plugins/datepicker/i18n/datepicker.en.js') }}"></script>

    <!-- Dashboard JS -->
    <script src="{{ asset('js/init/dashborad.js') }}"></script>

    <!-- Tabledit JS -->
    <script src="{{ asset('plugins/tabledit/jquery.tabledit.js') }}"></script>
    <script src="{{ asset('js/init/table-editable-init.js') }}"></script>

    <!-- Parsley JS -->
    <script src="{{ asset('plugins/validatejs/validate.min.js') }}"></script>

    <!-- Validate JS -->
    <script src="{{ asset('js/init/validate-init.js') }}"></script>
    <script src="{{ asset('js/init/form-validation-init.js') }}"></script>

    <!-- Required Datatable JS -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>


    <!-- Datatable init JS -->
    <script src="{{ asset('js/init/table-datatable-init.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- PDF 
    <script src="{{ asset('js/init/table-datatable-init.js') }}"></script>-->
    <?php

$maskName = "existencia";

?>

    <script>
$("#todosProd<?=$maskName?>").click(function(){
		$("#productoSku<?=$maskName?>").attr("disabled",this.checked);
		$("#productoDescrip<?=$maskName?>").attr("disabled",this.checked);
		$("#productoSkuF<?=$maskName?>").attr("disabled",this.checked);
		$("#productoDescripF<?=$maskName?>").attr("disabled",this.checked);
	});
    
        $(document).on('click', '#imprimir', function(event) {

   var validapI = true;
		var validapF = true;
		var validafF = true;

	 	var anioF = $("#<?=$maskName?>fechaF").val();
	 	var horaF = "23:59:59"
		//var diaF = $("#<?=$maskName?>fechaF").val().substring(0,2);
	 	var fechaF = anioF+horaF;
		

		

		rpt_name = $("#tabs-<?=$maskName?>-flags #rpt_name").val();
		var reportName = "existe.rptdesign";


		var tot_cat = $("#<?=$maskName?>-categoria-select").find(" li ").length;
		var x = 0;
		var catIn = "";
			$('#<?=$maskName?>-categoria-select .jstree-checked').each(function(i, selected){
			catItem = $(selected).attr("id");
			catIdx = catItem.indexOf("-");
			catIn = catIn + catItem.substr(catIdx+1) + ",";
			x++;
		});
		catIn = catIn + '0';
		if(tot_cat == x)
			catIn = '0';

		if ($("#todosSuc<?=$maskName?>").prop('checked'))
			var sucursal = 0;
		else
			var sucursal = $("#sucursal_id_in<?=$maskName?>").val();


		if ($("#todosProd<?=$maskName?>").prop('checked')){
			var productoId = 0;
			var productoIdF = 0;}
		else{
			var productoId = $("#productoId<?=$maskName?>").val();
			if (($("#productoId<?=$maskName?>").val()=="") || ($("#productoId<?=$maskName?>").val()==undefined)){
					validapI = false;
				 }
			var productoIdF = $("#productoIdF<?=$maskName?>").val();
			if (($("#productoIdF<?=$maskName?>").val()=="") || ($("#productoIdF<?=$maskName?>").val()==undefined)){
					validapF = false;
				 }
		}
		
		var buscar_por = $("#<?=$maskName?>-buscar_por option:selected").val();

		if ($("#todosBod<?=$maskName?>").prop('checked'))
			var bodegaId = 0;
		else
			var bodegaId = $("#bodega_id<?=$maskName?>").val();


		var buscar_por = $("#<?=$maskName?>-buscar_por option:selected").val();
		if(buscar_por == undefined) buscar_por = 1;
        
		var emId = "1";
		var emFolder = "gestor";
		
		if ($("#todos"+'<?=$maskName?>').prop('checked')){
			var rpt_name = "existe.rptdesign";
		} 

		if ($("#saldos"+'<?=$maskName?>').prop('checked')){
			var rpt_name = "existe_saldos.rptdesign";
		}

		if ($("#saldosneg"+'<?=$maskName?>').prop('checked')){
			var rpt_name = "existe_neg.rptdesign";
		}

		var reportName = "gestor/existe.rptdesign";
        var serverUrl = "https://aldetalle.archangelsystems.com:8010/birt-viewer/frameset?__report=";
		
            var printUrl = serverUrl+reportName+"&emId="+emId+"&bodegaId="+bodegaId+"&fechaF="+fechaF+"&productoId="+productoId+"&productoIdF="+productoIdF;
        window.open(printUrl.replace(/\|/g, "%21"));
       
	});



        $("#proveedor_id").change(function() {
            var selected = $(this).children("option:selected").val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/buscarproveedor') }}",
                type: "POST",
                data: {'proveedor':selected},
                success: function(data) {
                    $("#nit").prop('value', data.nit);
                    console.log(data.nit);
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            });
        });

    $('.tags').select2({
        placeholder: "Buscar Producto",
        minimumInputLength: 1,
        tags: false,
        allowClear: false,
        dropdownAutoWidth: false,
        tokenSeparators: [','],
        ajax: {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            type: 'POST',
            url: "{{ url('/buscarproducto') }}",
            delay: 300,
            data: function(params) {
                return {
                    letter: params.term
                }
            },
            processResults: function(data, page) {

                return {
                    results: data,
                };

            },
        }

    });
    $("#productoSku").change(function() {
            var selected = $(this).children("option:selected").val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/buscarproductos') }}",
                type: "POST",
                data: {'proveedor':selected},
                success: function(data) {
                    $("#nit").prop('value', data.nit);
                    console.log(data.nit);
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            });
        });

    $('.tags2').select2({
        placeholder: "Buscar Proveedor",
        minimumInputLength: 1,
        tags: false,
        allowClear: false,
        dropdownAutoWidth: false,
        tokenSeparators: [','],
        ajax: {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            type: 'POST',
            url: "{{ url('/buscarproveedores') }}",
            delay: 300,
            data: function(params) {
                return {
                    letter: params.term
                }
            },
            processResults: function(data, page) {

                return {
                    results: data,
                };

            },
        }

    });
    $('.tagsucu').select2({
        placeholder: "Buscar Sucursal",
        minimumInputLength: 1,
        tags: false,
        allowClear: false,
        dropdownAutoWidth: false,
        tokenSeparators: [','],
        ajax: {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            type: 'POST',
            url: "{{ url('/buscarsucursal') }}",
            delay: 300,
            data: function(params) {
                return {
                    letter: params.term
                }
            },
            processResults: function(data, page) {

                return {
                    results: data,
                };

            },
        }

    });

    $(document).on('click', '#createrow', function(event) {

        $('.tags').select2({
            placeholder: "Buscar Producto",
            minimumInputLength: 1,
            tags: false,
            allowClear: false,
            dropdownAutoWidth: false,
            tokenSeparators: [','],
            ajax: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                type: 'POST',
                url: "{{ url('/buscarproducto') }}",
                delay: 300,
                data: function(params) {
                    return {
                        letter: params.term
                    }
                },
                processResults: function(data, page) {

                    return {
                        results: data,
                    };

                },
            }

        });

    });

    $(document).on('click', '#createrowinsert ', function(event) {

        $('.tags').select2({
            placeholder: "Buscar Producto",
            minimumInputLength: 1,
            tags: false,
            allowClear: false,
            dropdownAutoWidth: false,
            tokenSeparators: [','],
            ajax: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                type: 'POST',
                url: "{{ url('/buscarproductoinsert') }}",
                delay: 300,
                data: function(params) {
                    return {
                        letter: params.term
                    }
                },
                processResults: function(data, page) {

                    return {
                        results: data,
                    };

                },
            }

        });
    });



    $(document).on('click', '.delete', function(event) {

        row = $(this).data('row');

        sustract = 0.00;
        grantotal = $('.grantotal').val();
        amount = $('#total' + row).data('amount');
        sustract = parseFloat(grantotal) - parseFloat(amount);

        $('.grantotal').prop('value', sustract);

        tr = $('#tr-' + row).remove();
        i = $("#productos").val();
        i = parseInt(i) - 1;

        $('#productos').attr('value', i);

    });

    $(document).on('keyup', '.val', function(event) {


        id = $(this).data('id');
        precio = $(this).val();
        cantidad = $(".cantidad").val();
        subtotal = parseFloat(precio) * parseFloat(cantidad);
        $('#total' + id).prop('value', subtotal);
        $('#total' + id).data('amount', subtotal);
        sum = 0.00;
        $('.tr', 'table').each(function() {

            var tot = $(this).find('input[type="text"]:eq(2)');

            sum += parseFloat(tot.val());

        });

        $('.grantotal').prop('value', sum);



    });


    $(document).ready(function() {

        i = $("#productos").val();

        $("#createrow").click(function() {

            i = parseInt(i) + 1;

            tr = $('#tr-' + i).data('exists');

            if (tr == 'si') {

                i = parseInt(i) + 1;

                tr = $('#StockInTable').append('<tr class="tr" data-exists="si" id="tr-' + i + '" >' +
                    '<td><select type="text" class="form-control tags"  id="imei' + i +
                    '" name="imei' + i +
                    '" placeholder="imei" value="" required=""></select></td>' +
                    '<td><input type="text" class="form-control cantidad" id="cantidad' + i +
                    '" name="cantidad' + i +
                    '" readonly placeholder="cantidad" value="1" required=""></td>' +
                    '<td><input type="text" class="form-control val" id="precio' + i +
                    '" name="precio' + i + '" data-id="' + i +
                    '" placeholder="precio" value="0.00" required=""></td>' +
                    '<td><input type="text" class="form-control total" data-amount="" readonly id="total' +
                    i + '" readonly name="total' + i +
                    '" placeholder="total" value="0.00" required=""></td>' +
                    '<td><i style="cursor:pointer" data-row="' + i +
                    '" class="delete fa fa-close fa-lg"></i></tr>');

                i = parseInt(i) - 1;

                $('#productos').attr('value', i);
            } else {

                tr = $('#StockInTable').append('<tr class="tr" data-exists="si" id="tr-' + i + '" >' +
                    '<td><select type="text" class="tags"  id="imei' + i + '" name="imei' + i +
                    '" placeholder="imei" value="" required=""></select></td>' +
                    '<td><input type="text" class="form-control cantidad" id="cantidad' + i +
                    '"name="cantidad' + i +
                    '" placeholder="cantidad" readonly value="1" required=""></td>' +
                    '<td><input type="text" class="form-control val" id="precio' + i +
                    '" name="precio' + i + '" data-id="' + i +
                    '" placeholder="precio" value="0.00" required=""></td>' +
                    '<td><input type="text" class="form-control total" id="total' + i +
                    '" data-amount="" readonly name="total' + i +
                    '" placeholder="subtotal" value="0.00" required=""></td>' +
                    '<td><i style="cursor:pointer" data-row="' + i +
                    '" class="delete fa fa-close fa-lg"></i></tr>');

                $('#productos').attr('value', i);
            }


        });

        $("#createrowinsert").click(function() {

            i = parseInt(i) + 1;

            tr = $('#tr-' + i).data('exists');

            if (tr == 'si') {

                i = parseInt(i) + 1;

                tr = $('#StockInTableinsert').append('<tr data-exists="si" id="tr-' + i + '" >' +
                    '<td><select type="text" class="form-control tags"  id="imei' + i +
                    '" name="imei' + i +
                    '" placeholder="imei2" value="" required=""></select></td>' +
                    '<td><input type="text" class="form-control" id="cantidad' + i +
                    '" name="cantidad' + i +
                    '" readonly placeholder="cantidad" value="1" required=""></td>' +
                    '<td><i style="cursor:pointer" data-row="' + i +
                    '" class="delete fa fa-close fa-lg"></i></tr>');

                i = parseInt(i) - 1;

                $('#productos').attr('value', i);
            } else {

                tr = $('#StockInTableinsert').append('<tr data-exists="si" id="tr-' + i + '" >' +
                    '<td><select type="text" class="form-control tags"  id="imei' + i +
                    '" name="imei' + i +
                    '" placeholder="imei2" value="" required=""></select></td>' +
                    '<td><input type="text" class="form-control" id="cantidad' + i +
                    '"name="cantidad' + i +
                    '" placeholder="cantidad" readonly value="1" required=""></td>' +
                    '<td><i style="cursor:pointer" data-row="' + i +
                    '" class="delete fa fa-close fa-lg"></i></tr>');

                $('#productos').attr('value', i);
            }


        });




    });


    </script>

</body>

</html>