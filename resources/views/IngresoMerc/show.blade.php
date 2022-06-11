@extends('layouts.app')

@section('content')
@include('admin.sidebar')

<div class="row">
    <div class="col-md-12">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Mercaderia {{ $ingreso_cab->id }}</h5>
                <h6 class="card-subtitle">Producto</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/ingreso_mercaderia') }}" class="button"><button type="button"
                        class="btn btn-outline-warning"><i class="icon-arrow-left-circle" aria-hidden="true"></i>
                        Regresar</button></a>

                <br />
                <br />

                <div class="row">

                    <div class="col-sm-3">
                    </div>

                    <div class="table-responsive col-sm-12 ">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $ingreso_cab->id }}</td>
                                </tr>
                                <tr><th> Fecha </th><td> {{ $ingreso_cab->fecha }} </td>
                                <tr><th> Numero </th><td> {{ $ingreso_cab->numero }} </td>
                                <tr><th> Proveedor </th><td> {{ $proveedor->nombre }} </td>
                                <tr><th> Bodega </th><td> {{ $bodega->nombre }} </td>
                                <tr><th> NIT </th><td> {{ $ingreso_cab->nit }} </td>
                                <tr><th> Observ </th><td> {{ $ingreso_cab->observ }} </td></tr>
                                <tr><th></th><td></td></tr>
                                <tr>
                                    <table id="StockInTable" class="table table-condensed table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>IMEI</th>
                                                <th>Cantidad</th>
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
                                                        <td><input type="text" id="@php echo 'imei'. $i @endphp" +  name="@php echo 'imei'. $i @endphp" class="form-control" readonly  value="{{ $det->producto_id }}" required></td></td>
                                                        <td><input type="text" id="@php echo 'cantidad'. $i @endphp" name="@php echo 'cantidad'. $i @endphp" class="form-control" readonly  value="{{ $det->cantidad }}" required></td></td>
                                                     </tr>
                                                @endforeach
                                            @endif
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection