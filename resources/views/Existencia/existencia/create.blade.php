@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h4 class="card-title text-black">Reporte de Existencias</h4>
            </div>

            <div class="card-body">

                <a href="{{ url('/existencia') }}" class="button"><button type="button"
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

                <form method="POST" class="needs-validation" action="{{ url('/existencia') }}" novalidate>
                    {{ csrf_field() }}

                    @include ('existencia.form', ['formMode' => 'create'])

                </form>
            </div>
        </div>
    </div>
</div>
@endsection