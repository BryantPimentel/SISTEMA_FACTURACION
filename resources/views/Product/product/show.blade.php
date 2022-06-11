@extends('layouts.app')

@section('content')
@include('admin.sidebar')

<div class="row">
    <div class="col-md-12">

        <div class="card bg-white">

            <div class="card-header bg-white">
                <h5 class="card-title text-black">Product {{ $product->id }}</h5>
                <h6 class="card-subtitle">Product</h6>
            </div>

            <div class="card-body">

                <a href="{{ url('/product') }}" class="button"><button type="button"
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
                                    <th>Producto ID</th>
                                    <td>{{ $product->id }}</td>
                                </tr>
                                <tr><th> Battery Sn </th><td> {{ $product->battery_sn }} </td></tr>
                                <tr><th> Chargerno A </th><td> {{ $product->chargerno_a }} </td></tr>
                                <tr><th> Color </th><td> {{ $product->color }} </td></tr>
                                <tr><th> Country </th><td> {{ $product->country }} </td></tr>
                                <tr><th> Ean Upc Code </th><td> {{ $product->ean_upc_code }} </td></tr>
                                <tr><th> Imei </th><td> {{ $product->imei }} </td></tr>
                                <tr><th> Imei 1 </th><td> {{ $product->imei_1 }} </td></tr>
                                <tr><th> Item Sales </th><td> {{ $product->item_sales }} </td></tr>
                                <tr><th> lot No </th><td> {{ $product->lotNo}} </td></tr>
                                <tr><th> Mac </th><td> {{ $product->mac}} </td></tr>
                                <tr><th> Mac 1 </th><td> {{ $product->mac_1}} </td></tr>
                                <tr><th> Mac 2 </th><td> {{ $product->mac_2}} </td></tr>
                                <tr><th> Meid Dec </th><td> {{ $product->meid_dec}} </td></tr>
                                <tr><th> Meid Dec 18 </th><td> {{ $product->meid_dec_18}} </td></tr>
                                <tr><th> Meid Hex </th><td> {{ $product->meid_hex}} </td></tr>
                                <tr><th> Meid Hex 14 </th><td> {{ $product->meid_hex_14}} </td></tr>
                                <tr><th> Model Ex </th><td> {{ $product->model_ex}} </td></tr>
                                <tr><th> Packing List No </th><td> {{ $product->packing_list_no}} </td></tr>
                                <tr><th> Board Barcode </th><td> {{ $product->board_barcode}} </td></tr>
                                <tr><th> Product Barcode </th><td> {{ $product->product_barcode}} </td></tr>
                                <tr><th> Product Date </th><td> {{ $product->product_date}} </td></tr>
                                <tr><th> Packing 2 </th><td> {{ $product->packing2}} </td></tr>
                                <tr><th> Packing 3 </th><td> {{ $product->packing3}} </td></tr>
                                <tr><th> Weight </th><td> {{ $product->weight}} </td></tr>
                                <tr><th> Secrettype </th><td> {{ $product->secrettype}} </td></tr>
                                <tr><th> Software Version </th><td> {{ $product->software_version}} </td></tr>
                                <tr><th> Spu Barcode </th><td> {{ $product->spu_barcode}} </td></tr>
                                <tr><th> Wifi </th><td> {{ $product->wifi}} </td></tr>
                                <tr><th> Stock </th><td> {{ $product->stock}} </td></tr>
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