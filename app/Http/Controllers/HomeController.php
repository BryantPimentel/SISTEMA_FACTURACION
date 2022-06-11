<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function graphics(){

        $product_count = DB::table('product')
        ->select('id')
        ->count();

        $sale_count = DB::table('product')
        ->select('id')
        ->where('stock','=',0)
        ->count();

        return view('home', compact('product_count','sale_count'));
    }

    public function buscar_product(){

        $product_count = DB::table('product')
        ->select('id')
        ->count();

        $sale_count = DB::table('product')
        ->select('id')
        ->where('stock','=',0)
        ->count();

        $q = Input::get ( 'q' );
        if($q != ""){
            $prod = Product::where ( 'imei', '=' ,$q)->get ();
            if (count ( $prod ) > 0)
                return view ( 'home' , compact('product_count','sale_count'))->withDetails ( $prod )->withQuery ( $q );
            else
                return view ( 'home' , compact('product_count','sale_count'))->withMessage ( 'El producto no existe. Intente ingresar otro producto!' );
        }
        return view ( 'home' , compact('product_count','sale_count'))->withMessage ( 'El producto no existe. Intente ingresar otro producto!' );

    }

}
