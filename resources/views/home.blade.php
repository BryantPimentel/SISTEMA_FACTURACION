@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Total product -->
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="card bg-primary-gradient m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box xp-widget-newsletter text-white text-center pt-3">
                        <p class="xp-icon-timer mb-4"><i class="icon-basket"></i></p>
                        <h2 class="mb-2 font-20">Total de Productos</h2>
                        <p class="mb-8"><h4 class="mb-2 font-20">{{ $product_count }}</h4></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Exit product -->
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="card bg-success-gradient m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box text-white text-center pt-3">
                        <p class="xp-icon-timer mb-4"><i class="mdi mdi-cart-plus"></i></p>
                        <h4 class="mb-2 font-20">Productos Vendidos</h4>
                        <p class="mb-8"><h4 class="mb-2 font-20">{{ $sale_count }}</h4></p>
                    </div>
                </div>
            </div>
        </div>
          <!-- Existence product -->
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="card bg-danger-gradient m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box xp-widget-newsletter text-white text-center pt-3">
                        <p class="xp-icon-timer mb-4"><i class="icon-basket-loaded"></i></p>
                        <h2 class="mb-2 font-20">Existencia de Productos</h2>
                        <p class="mb-8"><h4 class="mb-2 font-20">{{ $product_count - $sale_count }}</h4></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="container">
                        <center><h2>Buscar Producto Por IMEI</h2></center>
                        <form action="/" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                    placeholder="Buscar Producto"> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <div class="container">
                            @if(isset($details))
                            <br>
                            <p> El producto buscado por IMEI <b> {{ $query }} </b> es :</p>
                            <br>
                            <h4>Detalle del producto</h4>
                            <div class="table-responsive">
                                <table class="table">   
                                <thead>
                                    <tr>
                                        <th>Imei</th>
                                        <th>Model Ex</th>
                                        <th>Color</th>
                                        <th>Country</th>
                                        <th>Ean Upc Code</th>
                                        <th>Item Sales</th>
                                        <th>Lote no</th>
                                        <th>Mac</th>
                                        <th>Stock</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($details as $prod)
                                    <tr>
                                        <td>{{$prod->imei}}</td>
                                        <td>{{$prod->model_ex}}</td>
                                        <td>{{$prod->color}}</td>
                                        <td>{{$prod->country}}</td>
                                        <td>{{$prod->ean_upc_code}}</td>
                                        <td>{{$prod->item_sales}}</td>
                                        <td>{{$prod->lotNo}}</td>
                                        <td>{{$prod->mac}}</td>
                                        <td>{{$prod->stock}}</td>                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @elseif(isset($message))
                        </br>
                            <center><h5>{{ $message }}</h5></center>
                            @endif
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
