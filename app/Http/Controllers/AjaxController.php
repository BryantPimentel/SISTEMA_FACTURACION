<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Proveedor;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function imei(Request $request)
    {
        $letter = $request->letter;

        $prod = Product::where('imei', 'LIKE', '%' . $letter . '%' )
                ->where('stock','=','1')
                ->get();

        $data = [];
        
        if(isset($prod)){
            foreach ($prod as $id) {
                
                $data[] = ['id' => isset($id->imei) ? $id->imei : '', 'text' => isset($id->imei) ? $id->imei : ''];
            
            }
        }
        
        return response()->json($data);


    }

    public function imei2(Request $request)
    {
        $letter = $request->letter;

        $prod = Product::where('imei', 'LIKE', '%' . $letter . '%' )
                ->where('stock','=','0')
                ->get();

        $data = [];
        
        if(isset($prod)){
            foreach ($prod as $id) {
                
                $data[] = ['id' => isset($id->imei) ? $id->imei : '', 'text' => isset($id->imei) ? $id->imei : ''];
            
            }
        }
        
        return response()->json($data);


    }

    public function proveedor(Request $request)
    {
        $prov_id = $request->proveedor;
        
        $prod = Proveedor::where('id', '=', $prov_id)
        ->first();

        return response()->json($prod);

    }
    public function imeis (Request $request)
    {
        $prov_id = $request->proveedor;
        
        $prod = Product::where('id', '=', $prov_id)
        ->first();

        return response()->json($prod);


    }
    public function proveedor1(Request $request)
    {
        $letter = $request->letter;

        $prove = Proveedor::where('nombre', 'LIKE', '%' . $letter . '%' )
                ->get();
        $data = [];
        if(isset($prove)){
            foreach ($prove as $id) {
                
                $data[] = ['id' => isset($id->id) ? $id->id : '', 'text' => isset($id->nombre) ? $id->nombre : ''];
            
            }
        }
        
        
        return response()->json($data);


    }
    public function sucursal(Request $request)
    {
        $letter = $request->letter;

        $sucur = Proveedor::where('nombre', 'LIKE', '%' . $letter . '%' )
                ->get();
        $data = [];
        if(isset($sucur)){
            foreach ($prove as $id) {
                
                $data[] = ['id' => isset($id->id) ? $id->id : '', 'text' => isset($id->nombre) ? $id->nombre : ''];
            
            }
        }
        
        
        return response()->json($data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Product.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Product::create($requestData);

        return redirect('product')->with('flash_message', 'Product added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('Product.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('Product.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $product = Product::findOrFail($id);
        $product->update($requestData);

        return redirect('product')->with('flash_message', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('product')->with('flash_message', 'Product deleted!');
    }
}
