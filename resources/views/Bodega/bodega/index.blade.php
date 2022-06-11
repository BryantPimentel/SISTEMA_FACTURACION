@extends('layouts.app')

@section('content')

<div class="card bg-white">

    <div class="card-header bg-white">
        <h5 class="card-title text-black">Bodega</h5>
        <h6 class="card-subtitle">Bodega</h6>
    </div>

    <div class="card-body">

            <a href="{{ url('/bodega/create') }}" class="button">
                <button type="button"class="btn btn-outline-success">
                    <i class="icon-plus" aria-hidden="true"></i> Crear Nuevo Bodega
                </button>
            </a>

        <br />
        <br />

        <div class="table-responsive">
            <table id="xp-default-datatable" class="display table table-striped table-bordered" text-align="center">
                <thead>
                    <tr>
                        <th>No. </th><th>Nombre</th><th>Direccion</th><th>Nit</th><th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bodega as $item)
                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nombre }}</td><td>{{ $item->direccionbod }}</td><td>{{ $item->nitbod }}</td>
                        <td width="15%">

                                <a href="{{ url('/bodega/' . $item->id) }}" title="">
                                    <button class="btn btn-info" style="float: none; margin: 5px; border-radius:40px;"><i
                                            class="icon-eye" aria-hidden="true"></i> 
                                        </button>
                                    </a>

                                <a href="{{ url('/bodega/' . $item->id . '/edit') }}" title="">
                                    <button class="btn btn-warning" style="float: none; margin: 5px; border-radius:40px;">
                                        <i class="ti-pencil" aria-hidden="true"></i> 
                                    </button>
                                </a>

                                <form method="POST" action="{{ url('/bodega' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
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