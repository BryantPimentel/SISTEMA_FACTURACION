@extends('layouts.app')

@section('content')
@include('admin.sidebar')

<div class="row">
    <div class="col-md-9">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Proveedor {{ $proveedor->id }}</h5>
                <h6 class="card-subtitle">Proveedor</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/proveedor') }}" class="button"><button type="button"
                        class="btn btn-outline-warning"><i class="icon-arrow-left-circle" aria-hidden="true"></i>
                        Regresar</button></a>

                <br />
                <br />

                <div class="row">

                    <div class="col-sm-3">
                    </div>

                    <div class="table-responsive col-sm-6 ">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $proveedor->id }}</td>
                                </tr>
                                <tr><th> Codigo </th><td> {{ $proveedor->codigo }} </td></tr><tr><th> Nombre </th><td> {{ $proveedor->nombre }} </td></tr><tr><th> Nombre Facturar </th><td> {{ $proveedor->nombre_facturar }} </td></tr><tr><th> Direccion </th><td> {{ $proveedor->direccion }} </td></tr><tr><th> Telefono </th><td> {{ $proveedor->telefono }} </td></tr><tr><th> Nit </th><td> {{ $proveedor->nit }} </td></tr><tr><th> Email </th><td> {{ $proveedor->email }} </td></tr>
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