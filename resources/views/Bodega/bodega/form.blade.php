
<div class="form-row justify-content-left">
    <label for="{{ 'Nombre' }}" class="justify-content-left control-label">{{ 'Nombre' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="nombre" name="nombre" class="form-control mb-3" value="{{ isset($bodega->nombre) ? $bodega->nombre : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Nombre' }}" class="justify-content-left control-label">{{ 'Nombre' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="nombrebod" name="nombrebod" class="form-control mb-3" value="{{ isset($bodega->nombrebod) ? $bodega->nombrebod : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Direccion' }}" class="justify-content-left control-label">{{ 'Direccion' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="direccionbod" name="direccionbod" class="form-control mb-3" value="{{ isset($bodega->direccionbod) ? $bodega->direccionbod : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Nit' }}" class="justify-content-left control-label">{{ 'Nit' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="nitbod" name="nitbod" class="form-control mb-3" value="{{ isset($bodega->nitbod) ? $bodega->nitbod : ''}}">    

    <br><br>    
</div>



<br><br>
<div class="form-row justify-content-center">
    <input class="{{ $formMode === 'edit' ? 'btn btn-outline-info' : 'btn btn-outline-success' }} mb-3" type="submit" value="{{ $formMode === 'edit' ? 'Editar' : 'Crear' }}"></input>
</div>
