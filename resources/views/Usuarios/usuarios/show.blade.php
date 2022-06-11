@extends('layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/users') }}">Users</a></li>
    <li class="breadcrumb-item active" aria-current="page">Show</li>
@endsection

@section('content')
<br/>

<div class="row">
    <div class="col-md-6">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">User {{ $usuario->id }}</h5>
                <h6 class="card-subtitle">Usuario</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/users') }}" class="button"><button type="button"
                        class="btn btn-outline-warning"><i class="icon-arrow-left-circle" aria-hidden="true"></i>
                        Regresar</button></a>

                 <br>

                <div class="row">

                    <div class="col-sm-2"></div>

                    <div class="table-responsive col-sm-8 ">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $usuario->id }}</td>
                                </tr>
                                <tr><th> Nombre </th><td> {{ $usuario->name }} </td></tr><tr><th> Email </th><td> {{ $usuario->email }} </td></tr><tr><th> Usuario </th><td> {{ $usuario->usuario }} </td></tr><tr><th> Rol </th><td> {{ $roleid }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


@endsection