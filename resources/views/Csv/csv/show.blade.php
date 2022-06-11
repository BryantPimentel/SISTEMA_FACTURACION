@extends('layouts.app')

@section('content')
@include('admin.sidebar')

<div class="row">
    <div class="col-md-6">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Archivo Subido {{ $csv->id }}</h5>
                <h6 class="card-subtitle">Archivo Subido</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/csv') }}" class="button"><button type="button"
                        class="btn btn-outline-warning"><i class="icon-arrow-left-circle" aria-hidden="true"></i>
                        Regresar</button></a>

                <br />
                <br />

                <div class="row">

                    <div class="col-sm-3">
                    </div>

                    <div class="table-responsive col-sm-6 ">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $csv->id }}</td>
                                </tr>
                                <tr><th> Csv Filename </th>
                                    <td> {{ $csv->csv_filename }} </td>
                                </tr>
                                <tr><th> Csv Header </th><td> {{ $csv->csv_header }} </td></tr>
                                <tr><th> Csv Data </th>
                                <td> {{ $csv->csv_data }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</d @endsection