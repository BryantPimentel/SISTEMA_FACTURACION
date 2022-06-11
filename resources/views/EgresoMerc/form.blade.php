<div class="form-row">
    
        <div class="col-md-4 mb-2">
            <label>Fecha</label>
            <input type="date" class="form-control" name="fecha" placeholder="" value="{{ isset($egreso_cab->fecha) ? date('Y-m-d', strtotime($egreso_cab->fecha)) : ''}}" required>
            <div class="valid-feedback">

            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label>Numero</label>
            <input type="text" class="form-control" name="numero" placeholder="" value="{{ isset($egreso_cab->numero) ? $egreso_cab->numero : ''}}" required>
            <div class="valid-feedback">
            </div>
        </div>
        <div class="col-md-2 mb-2">
            <label>Forma de pago</label>
            <select class="custom-select" name="formapago" required>
                <option @if(isset($ingreso_det)) @if($formapago == 1) selected @endif @endif name="formapago" value="1">Contado</option>
                <option @if(isset($ingreso_det)) @if($formapago == 2) selected @endif @endif name="formapago" value="2">Credito</option>
            </select>
            <div class="valid-feedback">
            </div>
        </div>
        
        <div class="col-md-3 mb-3">
            <label>NIT</label>
            <input type="text" class="form-control" name="nit" placeholder="" value="{{ isset($egreso_cab->nit) ? $egreso_cab->nit : ''}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-6 mb-5">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="" value="{{ isset($egreso_cab->nombre) ? $egreso_cab->nombre : ''}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-6 mb-5">
            <label>Direccion</label>
            <input type="text" class="form-control" name="direccion" placeholder="" value="{{ isset($egreso_cab->direccion) ? $egreso_cab->direccion : ''}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <!--DETALLE -->
        
        <div class="col-md-12 mb-12">
            <h4 class="card-subtitle">Detalle </h4>
            <br>
        </div>

        <div id="dataTable" class="table-responsive col-lg-12 col-xs-12 col-sm-12">
            <a href="#" id="createrow"><i class="fa fa-plus-circle fa-lg"></i></a>
            <table id="StockInTable" class="table table-condensed table-bordered ">
                <thead>
                    <tr>
                        <th>IMEI</th>
                        <th>Cantidad</th>
                        <th>Costo</th>
                        <th>Total</th>
                        <th></th>
                    </tr>

                    @if(isset($egreso_det))
                        @php
                            $i = 0;
                        @endphp
                        @foreach($egreso_det as $det)
                            @php
                                $i += 1;
                            @endphp
                            <tr class="tr" data-exists="si" id="@php echo 'tr-'. $i @endphp" >
                                <td><select class="col-lg-5 tags" id="@php echo 'imei'. $i @endphp" name="@php echo 'imei'. $i @endphp"><option value="{{ $det->producto_id }}">{{ $det->producto_id }}</option></select></td>
                                <td><input type="text" id="@php echo 'cantidad'. $i @endphp" name="@php echo 'cantidad'. $i @endphp" class="form-control cantidad" readonly value="{{ $det->cantidad }}" required></td></td>
                                <td><input type="text" id="@php echo 'precio'. $i @endphp" name="@php echo 'precio'. $i @endphp" data-id="@php echo $i @endphp" class="form-control val"  value="{{ $det->precio }}" required></td></td>
                                <td><input type="text" id="@php echo 'total'. $i @endphp" name="@php echo 'total'. $i @endphp" class="form-control precio total" data-amount="{{ $det->cantidad * $det->precio }}" readonly value="{{ $det->cantidad * $det->precio }}" required></td></td>
                                <td><i style="cursor:pointer" data-row="@php echo $i @endphp" class="delete fa fa-close fa-lg"></i></tr>
                            </tr>

                        @endforeach
                    @endif
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        <div class="col-md-6 mb-5">
            <br><br>
            <label for="observ">Observaciones</label>
            <textarea class="form-control" name="observ" id="observ">{{ isset($egreso_cab->observ) ? $egreso_cab->observ : ''}}</textarea>
            <input style='display:none' id="productos" class="form-control" name="productos" value='{{ isset($cantidadp) ? $cantidadp : '0'}}'></input>
        </div>
        <div class="col-md-3 mb-5">
            <input style='display:none'></input>
        </div>

        <div class="col-md-2 mb-5">
            <br><br>
            <label for="total">Total</label>
            <input class="form-control grantotal" name="total" value="{{ isset($egreso_cab->total) ? $egreso_cab->total : '0.00'}}" readonly id="total">
        </div>

    </div>


    <div class="form-row justify-content-center">
        <input class="{{ $formMode === 'edit' ? 'btn btn-outline-info' : 'btn btn-outline-success' }} mb-3"
        type="submit" value="{{ $formMode === 'edit' ? 'Editar' : 'Crear' }}"></input>
    </div>