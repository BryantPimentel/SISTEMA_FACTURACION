@extends('layouts.app')

@section('content')
@include('admin.sidebar')

<div class="row">
    <div class="col-md-12">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Mercaderia Egreso {{ $egreso_cab->id }}</h5>
                <h6 class="card-subtitle">Producto Egresp</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/egreso_mercaderia') }}" class="button"><button type="button"
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
                                    <td>{{ $egreso_cab->id }}</td>
                                </tr>
                                <tr><th> Numero </th><td> {{ $egreso_cab->numero }} </td></tr>
                                <tr><th> NIT </th><td> {{ $egreso_cab->nit }} </td></tr>
                                <tr><th> Nombre </th><td> {{ $egreso_cab->nombre }} </td></tr>
                                <tr><th> Direccion </th><td> {{ $egreso_cab->direccion }} </td></tr>
                                <tr><th> Fecha de ingreso </th><td> {{ $egreso_cab->created_at }} </td></tr>
                                <tr><th> Total </th><td> {{ $egreso_cab->total }} </td></tr>
                                <tr><th></th><td></td></tr>
                                <tr>
                                    <table id="StockInTable" class="table table-condensed table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>IMEI</th>
                                                <th>Cantidad</th>
                                                <th>Costo</th>
                                                <th>Sub Total</th>
                                            </tr>

                                            @if(isset($egreso_det))
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach($egreso_det as $cab)
                                                    @php
                                                        $i += 1;
                                                    @endphp
                                                   <tr class="tr" data-exists="si" id="@php echo 'tr-'. $i @endphp" >
                                                    <td><input class=" form-control" readonly id="@php echo 'imei'. $i @endphp" name="@php echo 'imei'. $i @endphp" value="{{ $cab->producto_id }}"></input></td>
                                                    <td><input type="text" readonly id="@php echo 'cantidad'. $i @endphp" name="@php echo 'cantidad'. $i @endphp" class="form-control cantidad" readonly value="{{ $cab->cantidad }}" required></td></td>
                                                    <td><input type="text" readonly id="@php echo 'precio'. $i @endphp" name="@php echo 'precio'. $i @endphp" data-id="@php echo $i @endphp" class="form-control val"  value="{{ $cab->precio }}" required></td></td>
                                                    <td><input type="text" readonly id="@php echo 'total'. $i @endphp" name="@php echo 'total'. $i @endphp" class="form-control precio total" data-amount="{{ $cab->cantidad * $cab->precio }}" readonly value="{{ $cab->cantidad * $cab->precio }}" required></td></td>
                                                    
                                                </tr>
                                                @endforeach
                                            @endif
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</d @endsection