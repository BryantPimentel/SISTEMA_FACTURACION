@extends('layouts.app')

@section('content')

<div class="card bg-white">

    <div class="card-header bg-white">
        <h5 class="card-title text-black">Proveedor</h5>
        <h6 class="card-subtitle">Proveedor</h6>
    </div>

    <div class="card-body">

            <a href="{{ url('/proveedor/create') }}" class="button">
                <button type="button" class="btn btn-outline-success">
                    <i class="icon-plus" aria-hidden="true"></i> Crear Nuevo Proveedor
                </button>
            </a>

        <br />
        <br />

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="xp-edit-btn-a">
                <thead>
                    <tr>
                        <th>No. </th><th>Codigo</th><th>Nombre</th><th>Nombre Facturar</th><th>Direccion</th><th>Telefono</th><th>Nit</th><th>Email</th><th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proveedor as $item)
                    <tr>
                        
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->codigo }}</td><td>{{ $item->nombre }}</td><td>{{ $item->nombre_facturar }}</td><td>{{ $item->direccion }}</td><td>{{ $item->telefono }}</td><td>{{ $item->nit }}</td><td>{{ $item->email }}</td>
                        <td width="15%">

                                <a href="{{ url('/proveedor/' . $item->id) }}" title="">
                                    <button class="btn btn-info" style="float: none; margin: 5px; border-radius:40px;">
                                        <i class="icon-eye" aria-hidden="true"></i> 
                                    </button>
                                </a>

                                <a href="{{ url('/proveedor/' . $item->id . '/edit') }}" title="">
                                    <button class="btn btn-warning" style="float: none; margin: 5px; border-radius:40px;">
                                        <i class="ti-pencil" aria-hidden="true"></i> 
                                    </button>
                                </a>
                                        
                                <form method="POST" action="{{ url('/proveedor' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }} {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger" style="float: none; margin: 5px; border-radius:40px;" title=""
                                        onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <i class="icon-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection