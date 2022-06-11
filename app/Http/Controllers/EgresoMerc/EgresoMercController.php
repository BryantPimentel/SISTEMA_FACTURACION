<?php

namespace App\Http\Controllers\EgresoMerc;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\EgresoCab;
use App\EgresoDet;
use App\DetalleTranInv;
use App\Product;
use Illuminate\Http\Request;
use Auth;
use App\Models\EgresoMer;
use App\Models\ProductInsertStockModel;

class EgresoMercController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $egreso_cab = EgresoCab::all();

        return view('EgresoMerc.index', compact('egreso_cab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('EgresoMerc.create');
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
            'cliente_id' =>'1',
            'vendedor_id'=>'1',
            'documento_id'=>'0',
            'nombre'=>$requestData['nombre'],
            'direccion'=>$requestData['direccion'],
            'fecha'=>$requestData['fecha'],
            'dias_credito'=>'0',
            'iva'=>'0',
            'fyh'=>'2020-01-01 00:00:00',
            'ip'=>'0',
            'formapago'=>'0',
            'porc_desc'=>'0',
            'descuento'=>'0',
            'sta'=>'0',
            'exportacion'=>'0',
            'gravada'=>'0',
            'mercaderia'=>'0',
            'servicio'=>'0',    
            'exenta'=>'0',
            'ref_tabla'=>'0',
            'ref_id'=>'0',
            'fecha_tran'=>'2020-01-01 00:00:00',
            'partida'=>'0',
            'poliza'=>'0',
            'referencia'=>'0',
            'erp_cuenta_id'=>'0',
            'modulo_id'=>'0',
            'firma'=>'0',
            'respuesta'=>'0',
            'moneda_id'=>'0',
            'tipo_cambio'=>'0',
            'totala'=>'0',
            'descuentoa'=>'0',
            'impuesto'=>'0',
            'lat'=>'0',
            'Ing'=>'0',  
        ]);
        
        $egresocab = EgresoCab::create($arrayRequestData);

        //se quita el stock del imei
        $stockPro = new ProductInsertStockModel();   

        for ($a = 1; $a <= 1000; $a++) {

            if(isset($requestData['imei' . $a])){

                $stock = $stockPro->getStockProduct($requestData['imei'. $a]);
                EgresoDet::create([
                    'sucursal_id'=> '1',
                    'egreso_cab_id'=> $egresocab->id,
                    'producto_id'=> $requestData['imei'. $a],
                    'descrip'=> '0',
                    'cantidad'=> $requestData['cantidad'. $a],
                    'precio'=> $requestData['precio'. $a],
                    'importe'=> '0',
                    'bodega_id'=> '1',
                    'porc_desc'=> '0',
                    'descuento'=> '0',
                    'centro_id'=> '0',    
                    'id_idp'=> '0',
                    'idp_value'=> '0',
                    'gasto_id'=> '0',
                    'descrip_ampliada'=> '0',
                    'importe'=> '0',
                    'descuentoa'=> '0',
                    'porc_impuesto'=> '0'
                ]); 
                DetalleTranInv::create([
                    'sucursal_id'=> '1',
                    'egreso_cab_id'=> $egresocab->id,
                    'egreso_dev_cab_id'=> '1',
                    'ingreso_cab_id'=>'1',
                    'ingreso_dev_cab_id'=> '0',
                    'producto_id'=> $requestData['imei'. $a],
                    'debeu'=> '0',
                    'haberu'=> '1',
                    'debev'=> '0',
                    'haberv'=> '0',
                    'bodega_id'=> '1',
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
        return redirect('egreso_mercaderia')->with('flash_message', 'Factura added!');
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
        $egreso_cab = EgresoCab::findOrFail($id);

        $model = new EgresoMer();
        $egreso_det = $model->getEgresoDetEdit($id);

        return view('EgresoMerc.show', compact('egreso_cab','egreso_det'));
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
        $egreso_cab = EgresoCab::findOrFail($id);
        
        $model = new EgresoMer();
        $egreso_det = $model->getEgresoDetEdit($id);

        $model2 = new EgresoMer();
        $detalle_tra_inv =$model2->getEgresoDetInvEdit($id);
        $stockPro = new ProductInsertStockModel(); 

        $i = 0;
        $bodega = 'Default';
        foreach($egreso_det as $egrdet){
            $i += 1;
            $bodega = $egrdet->bodega_id;
            $stock = $stockPro->getStockProductIng($egreso_det->producto_id);
        }
        $cantidadp = $i;

        return view('EgresoMerc.edit', compact('egreso_cab','egreso_det','bodega','cantidadp','detalle_tra_inv'));
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
        
        $egreso_cab = EgresoCab::findOrFail($id);
        $egreso_cab->update($requestData);

        $model = new EgresoMer();
        $ingresodet = $model->getEgresoDet($id);
        $ingresodet->delete();

        $model2 = new EgresoMer();
        $detalle_tra_inv = $model2->getEgresoDetInvEdit($id);
        $detalle_tra_inv->delete();

        $stockPro = new ProductInsertStockModel();  
        
        for ($a = 1; $a <= 1000; $a++) {

            if(isset($requestData['imei' . $a])){

                $stock = $stockPro->getStockProduct($requestData['imei'. $a]);
                EgresoDet::create([
                    'sucursal_id'=> '1',
                    'egreso_cab_id'=> $id,
                    'producto_id'=> $requestData['imei'. $a],
                    'descrip'=> '0',
                    'cantidad'=> $requestData['cantidad'. $a],
                    'precio'=> $requestData['precio'. $a],
                    'importe'=> '0',
                    'bodega_id'=> '4',
                    'porc_desc'=> '0',
                    'descuento'=> '0',
                    'centro_id'=> '0',    
                    'id_idp'=> '0',
                    'idb_value'=> '0',
                    'gasto_id'=> '0',
                    'descrip_ampliada'=> '0',
                    'importe'=> '0',
                    'descuentoa'=> '0',
                    'porc_impuesto'=> '0'
                    
                ]);
                DetalleTranInv::create([
                    'sucursal_id'=> '1',
                    'egreso_cab_id'=> $id,
                    'egreso_dev_cab_id'=> '0',
                    'ingreso_cab_id'=> '45',
                    'ingreso_dev_cab_id'=> '0',
                    'producto_id'=> $requestData['imei'. $a],
                    'debeu'=> '1',
                    'haberu'=> '0',
                    'debev'=> '0',
                    'haberv'=> '0',
                    'bodega_id'=> '4',
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

        return redirect('egreso_mercaderia')->with('flash_message', 'Mercaderia updated!');
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
        $model = new EgresoMer();
        $egresodet = $model->getEgresoDet($id);
        $stockPro = new ProductInsertStockModel(); 
        
        $model2 = new EgresoMer();
        $egreso_det = $model2->getIngresoDetDestroyImei($id);
        foreach($egreso_det as $ingdet){
            $stock = $stockPro->getStockProductIng($ingdet->producto_id);
        }

        EgresoCab::destroy($id);
        $egresodet->delete();

        $model3 = new EgresoMer();
        $detalle_tra_inv = $model3->getEgresoDetInvEdit($id);
        $detalle_tra_inv->delete();

        
        return redirect('egreso_mercaderia')->with('flash_message', 'Eliminado!');
    }
}
