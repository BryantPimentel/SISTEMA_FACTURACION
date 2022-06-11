@extends('layouts.app')

@section('content')

<div class="card bg-white">

    <div class="card-header bg-white">
        <h5 class="card-title text-black">Egreso de Mercaderia</h5>
        <h6 class="card-subtitle">Egreso de productos</h6>
    </div>

    <div class="card-body">
        
            <a href="{{ url('/egreso_mercaderia/create') }}" class="button">
                <button type="button" class="btn btn-outline-success">
                    <i class="icon-plus" aria-hidden="true"></i> Crear Nuevo Egreso de Mercaderia
                </button>
            </a>

        <br />
        <br />

        <div class="table-responsive">
            <table id="xp-default-datatable" class="display table table-striped table-bordered" text-align="center">
                <thead>
                    <tr>
                        <th>Id </th><th>Fecha</th><th>Numero</th><th>Nombre</th><th>Total</th><th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($egreso_cab as $item)
                    @if($item->id > 0)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->fecha }}</td><td>{{ $item->numero }}</td><td>{{ $item->nombre }}</td><td>{{ $item->total }}</td>
                        <td width="15%">

                                <a href="{{ url('/egreso_mercaderia/' .  $item->id) }}" title="">
                                    <button class="btn btn-info" style="float: none; margin: 5px; border-radius:40px;">
                                        <i class="icon-eye" aria-hidden="true"></i> 
                                    </button>
                                </a>

                                <a href="{{ url('/egreso_mercaderia/' . $item->id . '/edit') }}" title="">
                                    <button class="btn btn-warning" style="float: none; margin: 5px; border-radius:40px;">
                                        <i class="ti-pencil" aria-hidden="true"></i> 
                                    </button>
                                </a>

                                <form method="POST" action="{{ url('/egreso_mercaderia' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }} {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger" style="float: none; margin: 5px; border-radius:40px;" title="" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <i class="icon-trash" aria-hidden="true"></i>
                                    </button>
                                </form>

                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection