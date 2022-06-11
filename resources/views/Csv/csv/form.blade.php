
<div class="form-row justify-content-left">
    <label for="{{ 'Csv Filename' }}" class="justify-content-left control-label">{{ 'Csv Filename' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="csv_filename" name="csv_filename" class="form-control mb-3" value="{{ isset($csv->csv_filename) ? $csv->csv_filename : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Csv Header' }}" class="justify-content-left control-label">{{ 'Csv Header' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="number" id="csv_header" name="csv_header" class="form-control mb-3" value="{{ isset($csv->csv_header) ? $csv->csv_header : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Csv Data' }}" class="justify-content-left control-label">{{ 'Csv Data' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="csv_data" name="csv_data" class="form-control mb-3" value="{{ isset($csv->csv_data) ? $csv->csv_data : ''}}">    

    <br><br>    
</div>



<br><br>
<div class="form-row justify-content-center">
    <input class="{{ $formMode === 'edit' ? 'btn btn-outline-info' : 'btn btn-outline-success' }} mb-3" type="submit" value="{{ $formMode === 'edit' ? 'Editar' : 'Crear' }}"></input>
</div>
