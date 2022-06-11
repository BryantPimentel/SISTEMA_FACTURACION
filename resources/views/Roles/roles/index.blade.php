@extends('layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item" aria-current="page">Roles</li>
@endsection

@section('alert')

    <div class="row">
        <div class="col-sm-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block justify-content-right" >
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        <div class="col-sm-12">
            @if ($message = Session::get('danger'))
                <div class="alert alert-danger alert-block justify-content-right" >
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong >{{ $message }}</strong>
                </div>
            @endif
        </div>
    </div>

@endsection

@section('content')
<br/>

<div class="card bg-white">

    <div class="card-header bg-white">
        <h5 class="card-title text-black">Roles</h5>
        <h6 class="card-subtitle">Rol</h6>
    </div>

    <div class="card-body">

        <a href="{{ url('/roles/create') }}" class="button">
            <button type="button" class="btn btn-outline-success"><i class="icon-plus" aria-hidden="true"></i> Create New Rol</button>
        </a>
        <br/><br/>

        <div class="table-responsive">
            <table id="xp-default-datatable" class="display table table-striped table-bordered" text-align="center">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Name</th>
                        <th>Descripción</th>
                        <th>Special</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($roles as $item)
                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>@if($item->special == "all-access") All Access @elseif($item->special == "") Personalized @else None Access @endif</td>
                        <td width="15%">
                            
                            <a href="{{ url('/roles/' . $item->id) }}" title="">
                                <button class="btn btn-info" style="float: none; margin: 5px; border-radius:40px;"><i class="icon-eye" aria-hidden="true"></i> </button>
                            </a>

                            <a href="{{ url('/roles/' . $item->id . '/edit') }}" title="">
                                <button class="btn btn-warning" style="float: none; margin: 5px; border-radius:40px;"><i class="ti-pencil" aria-hidden="true"></i> </button>
                            </a>

                            <form method="POST" action="{{ url('/roles' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger" style="float: none; margin: 5px; border-radius:40px;" title=""
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="icon-trash" aria-hidden="true"></i>
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

<br/><br/>


@endsection