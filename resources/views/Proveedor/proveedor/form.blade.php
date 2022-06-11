<div class="form-row justify-content-left">
    <label for="{{ 'Codigo' }}" class="justify-content-left control-label">{{ 'Codigo' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="codigo" name="codigo" class="form-control mb-3" value="{{ isset($proveedor->codigo) ? $proveedor->codigo : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Nombre' }}" class="justify-content-left control-label">{{ 'Nombre' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="nombre" name="nombre" class="form-control mb-3" value="{{ isset($proveedor->nombre) ? $proveedor->nombre : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Nombre Facturar' }}" class="justify-content-left control-label">{{ 'Nombre Facturar' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="nombre_facturar" name="nombre_facturar" class="form-control mb-3" value="{{ isset($proveedor->nombre_facturar) ? $proveedor->nombre_facturar : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Direccion' }}" class="justify-content-left control-label">{{ 'Direccion' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="direccion" name="direccion" class="form-control mb-3" value="{{ isset($proveedor->direccion) ? $proveedor->direccion : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Telefono' }}" class="justify-content-left control-label">{{ 'Telefono' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="telefono" name="telefono" class="form-control mb-3" value="{{ isset($proveedor->telefono) ? $proveedor->telefono : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Nit' }}" class="justify-content-left control-label">{{ 'Nit' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="nit" name="nit" class="form-control mb-3" value="{{ isset($proveedor->nit) ? $proveedor->nit : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Email' }}" class="justify-content-left control-label">{{ 'Email' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="email" name="email" class="form-control mb-3" value="{{ isset($proveedor->email) ? $proveedor->email : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Referencia Id' }}" class="justify-content-left control-label">{{ 'Referencia Id' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="number" id="referencia_id" name="referencia_id" class="form-control mb-3" value="{{ isset($proveedor->referencia_id) ? $proveedor->referencia_id : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Dias Credito' }}" class="justify-content-left control-label">{{ 'Dias Credito' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="number" id="dias_credito" name="dias_credito" class="form-control mb-3" value="{{ isset($proveedor->dias_credito) ? $proveedor->dias_credito : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Limite Credito' }}" class="justify-content-left control-label">{{ 'Limite Credito' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="limite_credito" name="limite_credito" class="form-control mb-3" value="{{ isset($proveedor->limite_credito) ? $proveedor->limite_credito : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Direccion2' }}" class="justify-content-left control-label">{{ 'Direccion2' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="direccion2" name="direccion2" class="form-control mb-3" value="{{ isset($proveedor->direccion2) ? $proveedor->direccion2 : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Departamento' }}" class="justify-content-left control-label">{{ 'Departamento' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="departamento" name="departamento" class="form-control mb-3" value="{{ isset($proveedor->departamento) ? $proveedor->departamento : ''}}">    

    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Municipio' }}" class="justify-content-left control-label">{{ 'Municipio' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="municipio" name="municipio" class="form-control mb-3" value="{{ isset($proveedor->municipio) ? $proveedor->municipio : ''}}">    

    <br><br>    
</div>



<br><br>
<div class="form-row justify-content-center">
    <input class="{{ $formMode === 'edit' ? 'btn btn-outline-info' : 'btn btn-outline-success' }} mb-3" type="submit" value="{{ $formMode === 'edit' ? 'Editar' : 'Crear' }}"></input>
</div>
