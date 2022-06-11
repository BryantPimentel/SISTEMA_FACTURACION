<?php

namespace App\Http\Controllers\IngresoMerc;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Factura;
use App\IngresoCab;
use App\IngresoDet;
use App\DetalleTranInv;
use App\Models\BodegaModel;
use App\Models\ProveedorModel;
use Illuminate\Http\Request;
use App\Models\ProductInsertStockModel;
use Auth;
use App\Models\IngMer;

class IngresoMercController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $model = new ProveedorModel();
        $ingreso_cab = $model->getProveedorIndex();
        return view('IngresoMerc.index', compact('ingreso_cab'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = new BodegaModel();
        $bodega = $model->getBodega();

        $model3 = new ProveedorModel();
        $proveedor = $model3->getProveedor();

        return view('IngresoMerc.create',compact('bodega','proveedor'));

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
        
        $arrayRequestData = array_merge($requestData, 
        [
            'sucursal_id' => '1',
            'usuario_id' => Auth::id(),
            'proveedor_id' => '1',
            'documento_id' => '0',
            'nombre' => $requestData['proveedor_id'],
            'direccion' => '0',
            'dias_credito' => '0',
            'subtotal' => '0',
            'iva' => '0',
            'fyh' => $requestData['fecha'],
            'ip' => '0',
            'formapago' => '0',
            'porc_desc' => '0',
            'descuento' => '0',
            'sta' => '1',
            'serie' => '0',
            'importacion' => '0',
            'fecha_tran' => '2020-01-01 00:00:00',
            'partida' => '0',
            'poliza' => '0',
            'referencia' => '0',
            'erp_cuenta_id' => '0',
            'modulo_id' => '0',
            'mercaderia' => '0',
            'servicios' => '0',
            'gravada' => '0',
            'exento' => '0',
            'ref_tabla' => '0',
            'ref_id' => '0',
            'total_idp' => '0'
        ]);
        
        $ingresocab = IngresoCab::create($arrayRequestData);
        $stockPro = new ProductInsertStockModel();   

        for ($a = 1; $a <= 1000; $a++) {
            if(isset($requestData['imei' . $a])){
                $stock = $stockPro->getStockProductIng($requestData['imei'. $a]);
                IngresoDet::create([
                    'sucursal_id' => '1',
                    'producto_id' => $requestData['imei'. $a],
                    'ingreso_cab_id' => $ingresocab->id,
                    'descrip' => '0',
                    'cantidad'  => $requestData['cantidad'. $a],
                    'importe' => '0',
                    'bodega_id' => $requestData['bodega_id'],
                    'centro_id' => '0',
                    'porc_desc' => '0',
                    'descuento' => '0',
                    'id_idp' => '0',
                    'idp_value' => '0',
                    'gasto_id' => '0',
                    'descrip_ampliada' => '0'
                    
                ]); 
                DetalleTranInv::create([
                    'sucursal_id'=> '1',
                    'egreso_cab_id'=> '1',
                    'egreso_dev_cab_id'=> '1',
                    'ingreso_cab_id'=> $ingresocab->id,
                    'ingreso_dev_cab_id'=> '1',
                    'producto_id'=> $requestData['imei'. $a],
                    'debeu'=> '1',
                    'haberu'=> '0',
                    'debev'=> '0',
                    'haberv'=> '0',
                    'bodega_id'=> $requestData['bodega_id'],
                    'traslado_cab_id'=> '0',
                    'fecha'=> $requestData['fecha'],
                    'debec'=> '0',
                    'centro_id'=> '0',
                    'gasto_id'=> '0',
                    'requis_cab_id'=> '0',
                    'debeca'=> '0',
                    'haberva'=> '0',
                    'moneda_id'=> '0',
                    'tipo_cambio'=> '0',
                    'transfer_cab_id'=> '0',
                    'costoprom'=> '0',
                    'saldou'=> '0',
                    'saldov'=> '0',
                ]);    
            }
        }
        return redirect('ingreso_mercaderia')->with('flash_message', 'Factura added!');
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
        $ingreso_cab = IngresoCab::findOrFail($id);
        
        $model = new IngMer();
        $ingreso_det = $model->getIngresoDetEdit($id);

        foreach($ingreso_det as $ing){
            $bodega_id = $ing->bodega_id;
        }
        
        $model2 = new ProveedorModel();
        $proveedor = $model2->getProveedorId($ingreso_cab->proveedor_id);
        $model3 = new BodegaModel();
        $bodega = $model3->getBodegaId($bodega_id);

        return view('IngresoMerc.show', compact('ingreso_cab','ingreso_det','proveedor','bodega'));


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
        $ingreso_cab = IngresoCab::findOrFail($id);

        $model = new IngMer();
        $ingreso_det = $model->getIngresoDetEdit($id);

        $model2 = new BodegaModel();
        $bodega = $model2->getBodega();

        $model3 = new ProveedorModel();
        $proveedor = $model3->getProveedor();

        $stockPro = new ProductInsertStockModel();   
        $i = 0;
       
        foreach($ingreso_det as $ingdet){
            $i += 1;
            $bodega_id = $model2->getBodegaId($ingdet->bodega_id);
            $proveedor_id = $model3->getProveedorId($ingreso_cab->proveedor_id);
            $stock = $stockPro->getStockProduct($ingdet->producto_id);
    
        }
        
        $cantidadp = $i;

        return view('IngresoMerc.edit', compact('ingreso_cab','ingreso_det','cantidadp','bodega','bodega_id','proveedor','proveedor_id'));
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

        $ingreso_cab = IngresoCab::findOrFail($id);
        $arrayingreso = array_merge($requestData, ['nombre' => $requestData['proveedor_id']]);
        $ingreso_cab->update($arrayingreso);

        $model = new IngMer();
        $ingresodet = $model->getIngresoDet($id);
        $ingresodet->delete();

        $model2 = new IngMer();
        $detalle_tra_inv = $model2->getIngresoDetInvEdit($id);
        $detalle_tra_inv->delete();
        $stockPro = new ProductInsertStockModel();   

        
        for ($a = 1; $a <= 1000; $a++) {

            if(isset($requestData['imei' . $a])){
                $stock = $stockPro->getStockProductIng($requestData['imei'. $a]);
                IngresoDet::create([
                    'sucursal_id' => '1',
                    'producto_id' => $requestData['imei'. $a],
                    'ingreso_cab_id' => $id,
                    'descrip' => '0',
                    'cantidad'  => $requestData['cantidad'. $a],
                    'importe' => '0',
                    'bodega_id' => $requestData['bodega_id'],
                    'centro_id' => '0',
                    'porc_desc' => '0',
                    'descuento' => '0',
                    'id_idp' => '0',
                    'idp_value' => '0',
                    'gasto_id' => '0',
                    'descrip_ampliada' => '0'
                    
                ]);
                DetalleTranInv::create([
                    'sucursal_id'=> '1',
                    'egreso_cab_id'=> '0',
                    'egreso_dev_cab_id'=> '0',
                    'ingreso_cab_id'=> $id,
                    'ingreso_dev_cab_id'=> '0',
                    'producto_id'=> $requestData['imei'. $a],
                    'debeu'=> '1',
                    'haberu'=> '0',
                    'debev'=> '0',
                    'haberv'=> '0',
                    'bodega_id'=> $requestData['bodega_id'],
                    'traslado_cab_id'=> '0',
                    'fecha'=> $requestData['fecha'],
                    'debec'=> '0',
                    'centro_id'=> '0',
                    'gasto_id'=> '0',
                    'requis_cab_id'=> '0',
                    'debeca'=> '0',
                    'haberva'=> '0',
                    'moneda_id'=> '0',
                    'tipo_cambio'=> '0',
                    'tranfer_cab_id'=> '0',
                    'costoprom'=> '0',
                    'saldou'=> '0',
                    'saldov'=> '0',
                ]);    
            } 

        }     

        return redirect('ingreso_mercaderia')->with('flash_message', 'Factura updated!');
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

        $model = new IngMer();
        $ingresodet = $model->getIngresoDet($id);
        $stockPro = new ProductInsertStockModel(); 
        
        $model2 = new IngMer();
        $ingreso_det = $model2->getIngresoDetDestroyImei($id);
        foreach($ingreso_det as $ingdet){
            $stock = $stockPro->getStockProduct($ingdet->producto_id);
        }
        IngresoCab::destroy($id);
        $ingresodet->delete();

        $model3 = new IngMer();
        $detalle_tra_inv = $model3->getIngresoDetInvEdit($id);
        $detalle_tra_inv->delete();

        
        return redirect('ingreso_mercaderia')->with('flash_message', 'Factura deleted!');
    }
}
