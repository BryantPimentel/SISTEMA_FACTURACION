@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Crear Nuevo Proveedor</h5>
                <h6 class="card-subtitle">Proveedor</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/proveedor') }}" class="button"><button type="button"
                        class="btn btn-outline-warning"><i class="icon-arrow-left-circle" aria-hidden="true"></i>
                        Regresar</button></a>

                <br />
                <br />

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" class="needs-validation" action="{{ url('/proveedor') }}" novalidate>
                    {{ csrf_field() }}

                    @include ('Proveedor.proveedor.form', ['formMode' => 'create'])

                </form>
            </div>
        </div>
    </div>
</div>
@endsection