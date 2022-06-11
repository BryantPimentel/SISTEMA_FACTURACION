<div class="form-row">
    
        <div class="col-md-4 mb-2">
            <label>Fecha</label>
            <input type="date" class="form-control" name="fecha" placeholder="" value="{{ isset($ingreso_cab->fecha) ? date('Y-m-d', strtotime($ingreso_cab->fecha)) : ''}}" required>
            <div class="valid-feedback">

            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Numero</label>
            <input type="text" class="form-control" name="numero" placeholder="" value="{{ isset($ingreso_cab->numero) ? $ingreso_cab->numero : ''}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Bodega</label>
            <select required id="bodega_id" name="bodega_id" class="form-control mb-3">    
                @foreach($bodega as $item)
                    <option @if($formMode === 'edit') @if($bodega_id->nombre == $item->nombre)selected @endif @endif value="{{$item->id}}">
                        {{ $item->nombre }} 
                    </option>
                @endforeach
            </select>  
            <br><br> 
        </div>


        <div class="col-md-4 mb-3">
            <label>Proveedor</label>
            <select required id="proveedor_id" name="proveedor_id" class=" mb-3 tags2"> 
               
            </select>  
            <br><br> 
        </div>

        <div class="col-md-4 mb-3">
            <label>NIT</label>
            <input type="text" id="nit"  class="form-control" name="nit" placeholder="" readonly value="{{ isset($ingreso_cab->nit) ? $ingreso_cab->nit : ''}}" required>
            <div class="valid-feedback">
            </div>
        </div>
        
        <!--DETALLE -->
        
        <div class="col-md-12 mb-12">
            <h4 class="card-subtitle">Detalle </h4>
            <br>
        </div>

        <div id="dataTable" class="table-responsive col-lg-12 col-xs-12 col-sm-12">
            <a href="#" id="createrowinsert"><i class="fa fa-plus-circle fa-lg"></i></a>
            <table id="StockInTableinsert" class="table table-condensed table-bordered ">
                <thead>
                    <tr>
                        <th>IMEI</th>
                        <th>Cantidad</th>
                        <th></th>
                    </tr>

                    @if(isset($ingreso_det))
                        @php
                            $i = 0;
                        @endphp
                        @foreach($ingreso_det as $det)
                            @php
                                $i += 1;
                            @endphp
                            <tr data-exists="si" id="@php echo 'tr-'. $i @endphp" >
                                <td><select class="col-lg-5 tags" id="@php echo 'imei'. $i @endphp" name="@php echo 'imei'. $i @endphp"><option value="{{ $det->producto_id }}">{{ $det->producto_id }}</option></select></td>
                                <td><input type="text" id="@php echo 'cantidad'. $i @endphp" name="@php echo 'cantidad'. $i @endphp" class="form-control" readonly value="{{ $det->cantidad }}" required></td></td>
                              <td><i style="cursor:pointer" data-row="@php echo $i @endphp" class="delete fa fa-close fa-lg"></i></tr>
                                    
                            </tr>
                        @endforeach
                    @endif
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>


        <div class="col-md-12 mb-5">
            <br><br>
            <label for="observ">Observaciones</label>
            <textarea class="form-control" name="observ" id="observ">{{ isset($ingreso_cab->observ) ? $ingreso_cab->observ : ''}}</textarea>
            <input style='display:none' id="productos" class="form-control" name="productos" value='{{ isset($cantidadp) ? $cantidadp : '0'}}'></input>
        </div>


</div>


    <div class="form-row justify-content-center">
        <input class="{{ $formMode === 'edit' ? 'btn btn-outline-info' : 'btn btn-outline-success' }} mb-3"
        type="submit" value="{{ $formMode === 'edit' ? 'Editar' : 'Crear' }}" ></input>
    </div>