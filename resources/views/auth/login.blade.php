@extends('layouts.app')

@section('content')
<div class="xp-authenticate-bg"></div>
<!-- Start XP Container -->
<div id="xp-container" class="xp-container">

    <!-- Start Container -->
    <div class="container">

        <!-- Start XP Row -->
        <div class="row vh-100 align-items-center">
            <!-- Start XP Col -->
            <div class="col-lg-12 ">

                <!-- Start XP Auth Box -->
                <div class="xp-auth-box" style="width:90%">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="row justify-content-center">
                                                <h1>{{ __('Login') }}</h1>

                                            </div>
                                            <form method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-user"></i>
                                                        </span>
                                                    </div>
                                                    <input id="email" type="email" class="form-control " name="email"
                                                        value="{{ old('email') }}" required autocomplete="email"
                                                        autofocus>

                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-lock"></i>
                                                        </span>
                                                    </div>
                                                    <input id="password" type="password" class="form-control "
                                                        name="password" required autocomplete="current-password">

                                                </div>


                                                @if ($errors->any())
                                                <ul class="alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                                @endif


                                                <button type="submit"
                                                    class="btn btn-primary btn-rounded btn-lg btn-block">
                                                    {{ __('Login') }}
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-md-5">
                                            </br>
                                            <div class="card-body text-center">
                                                <img src="{{ asset('images/inversiones/logo.png') }}"
                                                    height="100" alt="Inversiones al Detalle S.A"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection