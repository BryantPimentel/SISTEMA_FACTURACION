@extends('layouts.app')

@section('content')
@include('admin.sidebar')


<div class="row">
    <div class="col-md-12">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Editar Mercaderia #{{ $ingreso_cab->id }}</h5>
                <h6 class="card-subtitle">Producto</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/ingreso_mercaderia') }}" class="button"><button type="button"
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

                <form method="POST" class="needs-validation" id="ingmercedit" data-url="{{ url('/ingreso_mercaderia/' . $ingreso_cab->id) }}" data-id="{{$ingreso_cab->id}}"
                action="{{ url('/ingreso_mercaderia/' . $ingreso_cab->id) }}" novalidate>

                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    @include ('IngresoMerc.form', ['formMode' => 'edit'])

                </form>

            </div>
        </div>
    </div>
</div>
@endsection