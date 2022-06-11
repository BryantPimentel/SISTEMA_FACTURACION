<?php

namespace App\Http\Controllers;

use App\Csv;
use App\Http\Requests\CsvImportRequest;
use App\Product;
use App\IngresoDet;
use App\DetalleTranInv;
use App\IngresoCab;
use stdClass;
use Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\BodegaModel;
use App\Models\SucursalModel;
use App\Models\ProveedorModel;

class ImportController extends Controller
{

    public function getImport()
    {
        return view('import');
    }

    protected $lineEnding = '402';

    public function parseImport(CsvImportRequest $request)
    {
        
        $path = $request->file('csv_file')->getRealPath();
        
        if ($request->has('header')) {
            
            $data = Excel::load($path, function($reader) {})->get()->toArray();
            var_dump("hola");
            exit(0);
        } else {
          
            $data = array_map('str_getcsv', file($path));
        }
        
        if (count($data) > 0) {
            if ($request->has('header')) {
                $csv_header_fields = [];
                foreach ($data[0] as $key => $value) {
                    $csv_header_fields[] = $key;
                }
            }
            $csv_data = array_slice($data, 0, 1000);
            
            $csv_data_file = Csv::create([
                'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
                'csv_header' => $request->has('header'),
                'csv_data' => json_encode($data)
            ]);
            $model = new BodegaModel();
            $bodega = $model->getBodega();

            $model3 = new ProveedorModel();
            $proveedor = $model3->getProveedor();
        } else {
            return redirect()->back();
        }
        return view('import_fields', compact( 'csv_header_fields', 'csv_data', 'csv_data_file','bodega','proveedor'));

    }

    public function processImport(Request $request)
    {
        $data = Csv::find($request->csv_data_file_id);
        $csv_data = json_decode($data->csv_data, true);
        $requestData = $request->all();
        $arrayRequestData = array_merge($requestData, 
        [
            'sucursal_id' => '1',
            'usuario_id' => Auth::id(),
            'proveedor_id' => $requestData['proveedor'],
            'nombre' => $requestData['proveedor'],
            'documento_id' => '0',
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

        foreach ($csv_data as $row) {
            if(isset($row['imei'])){
                $contact = new Product();
                
                foreach (config('app.db_fields') as $index => $field) {
                    if ($data->csv_header) {
                        $product = array_merge($row, ['lotNo' => $row['lotno'], 'ingreso_cab_id' => $ingresocab->id]);
                        $products = array_merge($request->fields, ['lotNo' => 'lotNo','imei_1' => 'imei_1','ingreso_cab_id','ingreso_cab_id']);
                        $contact->$field = $product[$products[$field]];

                    } else {
                        $product = array_merge($row, ['lotNo' => $row['lotno']]);
                        $products = array_merge($request->fields, ['lotNo' => 'lotNo','imei_1' => 'imei_1','ingreso_cab_id' => 'ingreso_cab_id']);
                        $contact->$field = $product[$products[$index]];
                        
                    }
                }  

                try{
                    
                $contact->save();

                IngresoDet::create([
                    'sucursal_id' => '1',
                    'producto_id' => $contact->imei,
                    'ingreso_cab_id' => $ingresocab->id,
                    'descrip' => '0',
                    'cantidad'  => 1,
                    'precio'  => 0,
                    'importe' => '0',
                    'bodega_id' => $requestData['bodega'],
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
                    'ingreso_cab_id'=> $ingresocab->id,
                    'ingreso_dev_cab_id'=> '0',
                    'producto_id'=> $contact->imei,
                    'debeu'=> '1',
                    'haberu'=> '0',
                    'debev'=> '0',
                    'haberv'=> '0',
                    'bodega_id'=> $requestData['bodega'],
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
                        
                }catch(\Illuminate\Database\QueryException $e){

                    IngresoCab::destroy($ingresocab->id);
                    Csv::destroy($request->csv_data_file_id);
                    $respuesta = substr($e->getMessage(), 71, 15);

                    return redirect('/import')->with('danger', 'Imei Duplicado:' . $respuesta);

                }
            }
        }

        return redirect("/import")->with('success', 'Los datos fueron insertados exitosamente!');
    }

}