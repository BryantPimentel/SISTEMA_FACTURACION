@extends('layouts.app')

@section('content')

<div class="card bg-white">

    <div class="card-header bg-white">
        <h5 class="card-title text-black">Usuarios</h5>
        <h6 class="card-subtitle">Usuario</h6>
    </div>

    <div class="card-body">

            <a href="{{ url('/users/create') }}" class="button">
                <button type="button" class="btn btn-outline-success">
                    <i class="icon-plus" aria-hidden="true"></i> Crear Nuevo Usuario
                </button>
            </a> 
        <br />
        <br />

        <div class="table-responsive">
            <table id="xp-default-datatable" class="display table table-striped table-bordered" text-align="center">
                <thead>
                    <tr>
                        <th>No. </th><th>Nombre</th><th>Email</th><th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $item)
                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name}}</td><td>{{ $item->email }}</td>
                        <td width="18%">

                                <a href="{{ url('/users/' . $item->id) }}" title="">
                                    <button class="btn btn-info" style="float: none; margin: 5px; border-radius:40px;">
                                        <i class="icon-eye" aria-hidden="true"></i> 
                                    </button>
                                </a>

                                <a href="{{ url('/users/' . $item->id . '/edit') }}" title="">
                                    <button class="btn btn-warning" style="float: none; margin: 5px; border-radius:40px;">
                                        <i class="ti-pencil" aria-hidden="true"></i> 
                                    </button>
                                </a>

                                <form method="POST" action="{{ url('/users' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger" style="float: none; margin: 5px; border-radius:40px;" title="" 
                                        onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <i class="icon-trash"aria-hidden="true"></i>
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
