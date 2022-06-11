@extends('layouts.app')

@section('content')

<div class="card bg-white">

    <div class="card-header bg-white">
        <h5 class="card-title text-black">Product</h5>
        <h6 class="card-subtitle">Product</h6>
    </div>

    <div class="card-body">

            <a href="{{ url('/product/create') }}" class="button">
                <button type="button" class="btn btn-outline-success">
                    <i class="icon-plus" aria-hidden="true"></i> Crear Nuevo Product
                </button>
            </a>

        <br />
        <br />

        <div class="table-responsive">
            <table id="xp-default-datatable" class="display table table-striped table-bordered" text-align="center">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Imei</th>
                        <th>Model Ex</th>
                        <th>Color</th>
                        <th>Country</th>
                        <th>Ean Upc Code</th>
                        <th>Item Sales</th>
                        <th>Lote no</th>
                        <th>Mac</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $item)
                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{$item->imei}}</td>
                        <td>{{$item->model_ex}}</td>
                        <td>{{$item->color}}</td>
                        <td>{{$item->country}}</td>
                        <td>{{$item->ean_upc_code}}</td>
                        <td>{{$item->item_sales}}</td>
                        <td>{{$item->lotNo}}</td>
                        <td>{{$item->mac}}</td>
                        <td>{{$item->stock}}</td>  
        

                        <td width="15%">
                                <a href="{{ url('/product/' . $item->id) }}" title="">
                                    <button class="btn btn-info" style="float: none; margin: 5px; border-radius:40px;">
                                        <i class="icon-eye" aria-hidden="true"></i> 
                                    </button>
                                </a>
                            

                                <a href="{{ url('/product/' . $item->id . '/edit') }}" title="">
                                    <button class="btn btn-warning" style="float: none; margin: 5px; border-radius:40px;">
                                        <i class="ti-pencil" aria-hidden="true"></i> 
                                    </button>
                                </a>

                                <form method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }} {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger" style="float: none; margin: 5px; border-radius:40px;" title="" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="icon-trash"
                                            aria-hidden="true"></i>
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


@endsection