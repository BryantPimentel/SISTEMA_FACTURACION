

    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label>Battery Sn</label>
            <input type="text" class="form-control" name="battery_sn" placeholder="" value="{{ isset($product->battery_sn) ? $product->battery_sn : old('battery_sn')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Chargerno A</label>
            <input type="text" class="form-control" name="chargerno_a" placeholder="" value="{{ isset($product->chargerno_a) ? $product->chargerno_a : old('chargerno_a')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">  
            <label>Color</label>
            <input type="text" class="form-control" name="color" placeholder="" value="{{ isset($product->color) ? $product->color : old('color')}}" required>
            <div class="valid-feedback">
            </div>              
        </div>

        <div class="col-md-4 mb-3">
            <label>Country</label>
            <input type="text" class="form-control" name="country" placeholder="" value="{{ isset($product->country) ? $product->country : old('country')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Ean Upc Code</label>
            <input type="text" class="form-control" name="ean_upc_code" placeholder="" value="{{ isset($product->ean_upc_code) ? $product->ean_upc_code : old('ean_upc_code')}}" required>
            <div class="valid-feedback">
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <label>Imei</label>
            <input type="text" class="form-control" name="imei" placeholder="" value="{{ isset($product->imei) ? $product->imei : ''}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Imei 1</label>
            <input type="text" class="form-control" name="imei_1" placeholder="" value="{{ isset($product->imei_1) ? $product->imei_1 : old('imei_1')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Item Sales</label>
            <input type="text" class="form-control" name="item_sales" placeholder="" value="{{ isset($product->item_sales) ? $product->item_sales : old('item_sales')}}" required>
            <div class="valid-feedback">
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <label>Lot No</label>
            <input type="text" class="form-control" name="lotNo" placeholder="" value="{{ isset($product->lotNo) ? $product->lotNo : old('lotNo')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Mac</label>
            <input type="text" class="form-control" name="mac" placeholder="" value="{{ isset($product->mac) ? $product->mac : old('mac')}}" required>
            <div class="valid-feedback">
            </div>
        </div>


        <div class="col-md-4 mb-3">
            <label>Mac 1</label>
            <input type="text" class="form-control" name="mac_1" placeholder="" value="{{ isset($product->mac_1) ? $product->mac_1 : old('mac_1')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Mac 2</label>
            <input type="text" class="form-control" name="mac_2" placeholder="" value="{{ isset($product->mac_2) ? $product->mac_2 : old('mac_2')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Meid Dec</label>
            <input type="text" class="form-control" name="meid_dec" placeholder="" value="{{isset($product->meid_dec) ? $product->meid_dec : old('meid_dec')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Meid Dec 18</label>
            <input type="text" class="form-control" name="meid_dec_18" placeholder="" value="{{isset($product->meid_dec_18) ? $product->meid_dec_18 : old('meid_dec_18')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Meid Hex</label>
            <input type="text" class="form-control" name="meid_hex" placeholder="" value="{{isset($product->meid_hex) ? $product->meid_hex : old('meid_hex')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Meid Hex 14</label>
            <input type="text" class="form-control" name="meid_hex_14" placeholder="" value="{{isset($product->meid_hex_14) ? $product->meid_hex_14 : old('meid_hex_14')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Model Ex</label>
            <input type="text" class="form-control" name="model_ex" placeholder="" value="{{isset($product->model_ex) ? $product->model_ex : old('model_ex')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Packing List No</label>
            <input type="text" class="form-control" name="packing_list_no" placeholder="" value="{{isset($product->packing_list_no) ? $product->packing_list_no : old('packing_list_no')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Board Barcode</label>
            <input type="text" class="form-control" name="board_barcode" placeholder="" value="{{isset($product->board_barcode) ? $product->board_barcode : old('board_barcode')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Product Barcode</label>
            <input type="text" class="form-control" name="product_barcode" placeholder="" value="{{isset($product->product_barcode) ? $product->product_barcode : old('product_barcode')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Product Date</label>
            <input type="text" class="form-control" name="product_date" placeholder="" value="{{isset($product->product_date) ? $product->product_date : old('product_date')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Packing2</label>
            <input type="text" class="form-control" name="packing2" placeholder="" value="{{isset($product->packing2) ? $product->packing2 : old('packing2')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Packing3</label>
            <input type="text" class="form-control" name="packing3" placeholder="" value="{{isset($product->packing3) ? $product->packing3 : old('packing3')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Weight</label>
            <input type="text" class="form-control" name="weight" placeholder="" value="{{isset($product->weight) ? $product->weight : old('weight')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Secrettype</label>
            <input type="text" class="form-control" name="secrettype" placeholder="" value="{{isset($product->secrettype) ? $product->secrettype : old('secrettype')}}" required>
            <div class="valid-feedback">
            </div>
        </div>


        <div class="col-md-4 mb-3">
            <label>Software Version</label>
            <input type="text" class="form-control" name="software_version" placeholder="" value="{{isset($product->software_version) ? $product->software_version : old('software_version')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Spu Barcode</label>
            <input type="text" class="form-control" name="spu_barcode" placeholder="" value="{{isset($product->spu_barcode) ? $product->spu_barcode : old('spu_barcode')}}" required>
            <div class="valid-feedback">
            </div>
        </div>


        <div class="col-md-4 mb-3">
            <label>Wifi</label>
            <input type="text" class="form-control" name="wifi" placeholder="" value="{{isset($product->wifi) ? $product->wifi : old('wifi')}}" required>
            <div class="valid-feedback">
            </div>
        </div>

        <br><br>
    </div>
    <div class="form-row justify-content-center">
        <input class="{{ $formMode === 'edit' ? 'btn btn-outline-info' : 'btn btn-outline-success' }} mb-3" type="submit" value="{{ $formMode === 'edit' ? 'Editar' : 'Crear' }}"></input>
    </div>
