
<div class="form-row justify-content-left">
    <label for="{{ 'Nombre' }}" class="justify-content-left control-label">{{ 'Nombre' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="Nombre" name="name" class="form-control mb-3" value="{{ isset($usuario->name) ? $usuario->name : ''}}">    

    <br><br>    
</div>

<div class="form-row justify-content-left">
    <label for="{{ 'Usuario' }}" class="justify-content-left control-label">{{ 'Usuario' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="usuario" name="usuario" class="form-control mb-3" value="{{ isset($usuario->usuario) ? $usuario->usuario : ''}}">    

    
    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Email' }}" class="justify-content-left control-label">{{ 'Email' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input required type="text" id="Email" name="email" class="form-control mb-3" value="{{ isset($usuario->email) ? $usuario->email : ''}}">    

    
    <br><br>    
</div>


<div class="form-row justify-content-left">
    <label for="{{ 'Contraseña' }}" class="justify-content-left control-label">{{ 'Contraseña' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input @if($formMode === 'edit') @else required @endif  type="password" id="Contraseña" name="password" class="form-control mb-3" value="">    

    <br><br>    
</div>

<div class="form-row justify-content-left">
    <label for="{{ 'Confirmar Contraseña' }}" class="justify-content-left control-label">{{ 'Confirmar Contraseña' }}</label>
</div>    

<div class="form-row justify-content-left" >
    <input @if($formMode === 'edit') @else required @endif  type="password" id="Contraseña" name="password_confirmation" class="form-control mb-3" value="">    

    <br><br>    
</div>

<!--
<div class="form-row justify-content-left">
    <label for="{{ 'Rol' }}" class="justify-content-left control-label">{{ 'Rol' }}</label>
</div>

<div class="form-row justify-content-left" >
    <select required id="roles" name="roles" class="form-control mb-3">    
        @foreach($roles as $item)
            
            <option @if($formMode === 'edit') @if($roleid == $item->name) selected  @endif @endif value="{{$item->id}}" >{{ $item->name }}</option>
        
        @endforeach
    </select>      
</div>
!-->

<br><br>
<div class="form-row justify-content-center">
    <input class="{{ $formMode === 'edit' ? 'btn btn-outline-info' : 'btn btn-outline-success' }} mb-3" type="submit" value="{{ $formMode === 'edit' ? 'Editar' : 'Crear' }}"></input>
</div>
