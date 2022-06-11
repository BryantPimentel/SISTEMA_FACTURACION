@extends('layouts.app')

@section('alert')

<div class="row">
    <div class="col-sm-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block justify-content-right">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
    <div class="col-sm-12">
        @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-block justify-content-right">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
</div>

@endsection

@section('content')
<div class="card bg-white">

    <div class="card-header bg-white">
        <h5 class="card-title text-black">Product</h5>
        <h6 class="card-subtitle">Product</h6>
    </div>

    <div class="card-body">



        <div class="table-responsive">
            <table id="xp-default-datatable" class="display table table-striped table-bordered" text-align="center">
                <tbody>


                    <form id="imp_form" class="form-horizontal" method="POST" action="{{ route('import_process') }}">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label>Fecha</label>
                                <input type="date" class="form-control" name="fecha" placeholder=""
                                    value="{{ isset($ingreso_cab->fecha) ? date('Y-m-d', strtotime($ingreso_cab->fecha)) : ''}}"
                                    required>
                                <div class="valid-feedback">

                                </div>
                            </div>


                            <div class="col-md-4 mb-3">
                                <label>Numero</label>
                                <input type="text" class="form-control" name="numero" placeholder=""
                                    value="{{ isset($ingreso_cab->numero) ? $ingreso_cab->numero : ''}}" required>
                                <div class="valid-feedback">
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>Bodega</label>
                                <select required id="bodega" name="bodega" class="form-control mb-3">
                                    @foreach($bodega as $item)
                                    <option value="{{$item->id}}">
                                        {{ $item->nombre }}
                                    </option>
                                    @endforeach
                                </select>
                                <br><br>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>Proveedor</label>
                                <select required id="proveedor" name="proveedor" class="form-control mb-3 tags2">
                                 
                                </select>
                                <br><br>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>NIT</label>
                                <input type="text" id="nit"  class="form-control" name="nit" placeholder="" readonly value="{{ isset($ingreso_cab->nit) ? $ingreso_cab->nit : ''}}" required>
                             <div class="valid-feedback">
                                  </div>
                                    </div>

                            <div class="col-md-12 mb-5">
                                <label>Observaciones</label>
                                <textarea class="form-control" name="observ"
                                    id="observ">{{ isset($ingreso_cab->observ) ? $ingreso_cab->observ : ''}}</textarea>

                            </div>

                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Importando ... </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="loading">
                                                <center>
                                                    <img src="{{ asset('images/inversiones/carga.gif') }}" alt="loading" height="50px" width="50px" />
                                                    <h5>Espere un momento porfavor</h5></center>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class=" form-row justify-content-center col-md-12 mb-5">
                                <button class="btn btn-outline-success mb-3 col-md-6" type="submit" id="importbtn"
                                     data-toggle="modal" data-target="#myModal" >Importar Productos</button>

                                <br><br><br>
                            </div>

                        </div>

                        <div class="table-responsive">
                            <input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->id }}" />

                            <table class="display table table-striped table-bordered">
                                @if (isset($csv_header_fields))

                                <tr>
                                    @foreach ($csv_header_fields as $csv_header_field)
                                    <th>{{ $csv_header_field }}</th>
                                    @endforeach
                                </tr>

                                @endif

                                @foreach ($csv_data as $row)
                                <tr>

                                    @foreach ($row as $key => $value)
                                    @if (isset($row["imei"]))
                                    <td>{{ $value }}</td>
                                    @endif
                                    @endforeach
                                </tr>
                                @endforeach

                                <tr>
                                    @foreach ($csv_data[0] as $key => $value)
                                    <td>
                                        <select style='display:none' name="fields[{{ $key }}]">
                                            @foreach (config('app.db_fields') as $db_field)
                                            <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                                @if($key===$db_field) selected @endif> {{ $db_field }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    @endforeach
                                </tr>
                            </table>
                        </div>
                    </form>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection