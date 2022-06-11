@extends('layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/roles') }}">Roles</a></li>
    <li class="breadcrumb-item active" aria-current="page">Show</li>
@endsection

@section('content')

<br/>

<div class="row">
    <div class="col-md-6">
        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Rol {{ $roles->id }}</h5>
                <h6 class="card-subtitle">Rol</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/roles') }}" class="button"><button type="button" class="btn btn-outline-warning"><i class="icon-arrow-left-circle" aria-hidden="true"></i> Regresar</button>
                </a>

                <br/><br/><br/>

                <div class="row">

                    <div class="col-sm-2"></div>
                    <div class="table-responsive col-sm-8">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $roles->id }}</td>
                                </tr>
                                <tr><th> Name </th><td> {{ $roles->name }} </td></tr><tr><th> Slug </th><td> {{ $roles->slug }} </td></tr><tr><th> Description </th><td>{{ $roles->description }}</td></tr><tr><th> Special </th><td> @if($roles->special == 'all-access') All Access @elseif($roles->special == '') Personalized @else No Access @endif</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection