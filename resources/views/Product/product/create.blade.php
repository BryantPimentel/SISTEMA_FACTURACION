@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Crear Nuevo Product</h5>
                <h6 class="card-subtitle">Product</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/product') }}" class="button"><button type="button"
                        class="btn btn-outline-warning"><i class="icon-arrow-left-circle" aria-hidden="true"></i>
                        Regresar</button></a>

                <br />
                <br />

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>Imei ya esta Registrado!</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" class="needs-validation" action="{{ url('/product') }}" novalidate>
                    {{ csrf_field() }}

                    @include ('Product.product.form', ['formMode' => 'create'])

                </form>
            </div>
        </div>
    </div>
</div>
@endsection