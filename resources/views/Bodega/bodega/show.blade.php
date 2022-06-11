@extends('layouts.app')

@section('content')
@include('admin.sidebar')

<div class="row">
    <div class="col-md-6">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Bodega {{ $bodega->id }}</h5>
                <h6 class="card-subtitle">Bodega</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/bodega') }}" class="button"><button type="button"
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
                                    <td>{{ $bodega->id }}</td>
                                </tr>
                                <tr><th> Nombre </th><td> {{ $bodega->nombre }} </td></tr><tr><th> Nombre </th><td> {{ $bodega->nombrebod }} </td></tr><tr><th> Direccion </th><td> {{ $bodega->direccionbod }} </td></tr><tr><th> Nit </th><td> {{ $bodega->nitbod }} </td></tr>
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