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
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-b-30">
                    <div class="card-header bg-white">
                        <center><h3 class="card-title text-black mb-0">Import Products</h3></center>
                    </div>
                    <div class="card-body">                                    
                        <form class="form-horizontal" method="POST" action="{{ route('import_parse') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                                <center><label for="csv_file" class="col-md-4 control-label">Habra el archivo a importar (con extencion .csv, .xls, .xlsx)</label></center>

                                <div class="col-md-7">
                                    <input accept=".xlsx,.xls,.csv" align="center" id="csv_file" type="file" class="form-control" name="csv_file" required>

                                    @if ($errors->has('csv_file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('csv_file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <center><label>
                                            <input type="checkbox" style='display:none' name="header" checked>
                                        </label></center>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <center><button type="submit" class="btn btn-primary">
                                        Importar Productos
                                    </button></center>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
