@extends('layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/roles') }}">Roles</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
@endsection

@section('content')

<br/>

<div class="row">
    <div class="col-md-8">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Edit Rol #{{ $roles->id }}</h5>
                <h6 class="card-subtitle">Rol</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/roles') }}" class="button">
                    <button type="button" class="btn btn-outline-warning"><i class="icon-arrow-left-circle" aria-hidden="true"></i>  Regresar</button>
                </a>

                <br />
                <br />

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" class="needs-validation" action="{{ url('/roles/' . $roles->id) }}" novalidate>

                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    @include ('Roles.roles.form', ['formMode' => 'edit'])

                </form>

            </div>
        </div>
    </div>
</div>
@endsection