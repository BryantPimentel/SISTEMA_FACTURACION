@extends('layouts.app')

@section('content')
<?php

$maskName = "existencia";

?>

<div class="card bg-white">

    <div class="card-header bg-white">
        <h5 class="card-title text-black">Reporte de Existencias</h5>

    </div>

    <div class="card-body">
        <form>

            <div class="col-md-4 mb-3">
                <input type="hidden" class="form-control" id="emId" name="emId" placeholder="" value="1">
            </div>
            <div class="col-md-4 mb-3">
                <input type="hidden" class="form-control" id="sucursalId" name="sucursalId" placeholder="" value="1">
            </div>
            <div class="col-md-4 mb-3">
                <input type="hidden" class="form-control" id="usuarioId" name="usuarioId" placeholder="" value="{{$userid}}">
            </div>
            <div class="form-row">

            <div class="col-md-4 mb-2">
                    <label>Bodega</label>
                    <select id="bodega_id" name="bodegaId" class="form-control mb-3 tags">
                    </select>
                    <div class="valid-feedback">
                        <h6>llena este campo </h6>
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <label>Fecha Final</label>
                    <input type="date" class="form-control" id="<?=$maskName?>fechaF" name="<?=$maskName?>fechaF" value="<?=date('d/m/Y');?>" />
                         <div class="valid-feedback">
                    </div>
                </div>

                <div class="form-row">


                    <div class="col-md-4 mb-3">
                        <label>Emei inicial</label>
                        <select id="productoSku<?=$maskName?>" name="productoSku<?=$maskName?>" class="form-control mb-3 tags">            
                                 </select>
                        <div class="valid-feedback">

                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Modelo</label>
                        <input type="text" class="form-control" name="product" readonly placeholder="" value="{{ isset($product->modelo) ? $product->modelo : ''}}">
                        <div class="valid-feedback">

                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col-md-4 mb-2">
                            <label>Emei Final</label>
                            <select id="productoDescripF<?=$maskName?>" name="productoDescripF<?=$maskName?>" class="form-control mb-3 tags">
                            </select>
                            <div class="valid-feedback">

                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Modelo</label>
                            <input type="text" class="form-control" id="product" name="product" readonly placeholder=""
                                value=" ">
                            <div class="valid-feedback">

                            </div>

                        </div>
                        <input type="checkbox" id="todosProd<?=$maskName?>" name="todosProd<?=$maskName?>"/>
						<label for="todosProd<?=$maskName?>">Todos</label>

                        <div class="form-row justify-content-left">
                        <td>
                        <label class='ml-5'>

						<input type="radio" id="todos<?=$maskName?>" name="saldos<?=$maskName?>" checked/>
						<label class='ml-5' for="saldos<?=$maskName?>">Todos</label>
					</td>
                    <td>
                    <label class='ml-5'>

						<input type="radio" id="saldos<?=$maskName?>" name="saldos<?=$maskName?>"/>
						<label class='ml-5'for="saldos<?=$maskName?>">Solo cuentas con Saldo</label>
					</td>
                    <td>
                    <label class='ml-5'>
						<input type="radio" id="saldosneg<?=$maskName?>" name="saldos<?=$maskName?>"/>
						<label for="saldos<?=$maskName?>">Solo saldos negativos</label>
					</td>
                           
                        </div>


                    </div>
                   
                    <button id="imprimir" class="boton btn btn-outline-success">Imprimir</button>


                    <br />
        </form>
        
    </div>


</div>
@endsection
