<div class="form-row justify-content-left">
    <label for="{{ 'Name' }}" class="justify-content-left control-label">{{ 'Name' }}</label>
</div>

<div class="form-row justify-content-left">
    <input required type="text" id="name" name="name" class="form-control mb-3" value="{{ isset($roles->name) ? $roles->name : ''}}">
</div>

<div class="form-row justify-content-left">
    <label for="{{ 'Nombre corto' }}" class="justify-content-left control-label">{{ 'Nombre corto' }}</label>
</div>

<div class="form-row justify-content-left">
    <input required type="text" id="slug" name="slug" class="form-control mb-3" value="{{ isset($roles->slug) ? $roles->slug : ''}}">
</div>

<div class="form-row justify-content-left">
    <label for="{{ 'Description' }}" class="justify-content-left control-label">{{ 'Description' }}</label>
</div>

<div class="form-row justify-content-left">
    <input required type="text" id="description" name="description" class="form-control mb-3" value="{{ isset($roles->description) ? $roles->description : ''}}">
</div>

<div class="form-row justify-content-left">
    <label for="{{ 'Special' }}" class="justify-content-left control-label">{{ 'Special' }}</label>
</div>

<br>

<div class="form-row justify-content-left">
    <label class='ml-2' ><input @if($formMode === 'edit') @if($roles->special == 'all-access') checked  @endif @endif type="radio"  id="special" name="special" class="form-control mb-3 ml-4" style="width:20px;" value="all-access">All Access</label>
    <label class='ml-5 '><input @if($formMode === 'edit') @if($roles->special == 'no-access') checked  @endif @endif type="radio" id="special" name="special" class="form-control mb-3 ml-4" style="width:20px;" value="no-access">No Access</label>
    <label class='ml-5' ><input @if($formMode === 'edit') @if($roles->special == '') checked  @endif @endif type="radio" id="special" name="special" class="form-control mb-3 ml-4" style="width:20px;" value="">Personalized</label>
</div>

<br/><br/>

<div class="form-row justify-content-center">
    <label style="font-size:20px" for="{{ 'Permisos' }}"
        class="justify-content-left control-label">{{ 'Configuracion de Permisos' }}</label>
</div>

<br>

<label for="{{ 'Lista' }}" class="justify-content-left control-label">{{ 'Lista de Permisos' }}</label>
</div>

<div class="form-row justify-content-left">
    
	<ul class="list-unstyled">
        @php 
            $i = 0;
        @endphp

        @foreach($permissions as $permission)       
        <li class="ml-4">
            @php 
                $i++
            @endphp

            @if($i == 6)
                <br>
            @elseif($i == 11)    
                <br>
            @elseif($i == 16)    
                <br>
            @elseif($i == 21)    
                <br>
            @elseif($i == 26)    
                <br>
            @elseif($i == 31)    
                <br>
            @elseif($i == 36)    
                <br>
            @elseif($i == 41)    
                <br>      
            @elseif($i == 46)    
                <br>
            @elseif($i == 47)    
                <br>       
            @endif

	        <label>

            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" @if($formMode === 'edit') @if($roles->permissions->contains($permission)) checked @endif @endif>
	        
	        {{ $permission->name }}
	        <em>({{ $permission->description }})</em>
	        </label>
	    </li>
        @endforeach
    </ul>

</div>

<div class="form-row justify-content-center">
    <input class="{{ $formMode === 'edit' ? 'btn btn-outline-info' : 'btn btn-outline-success' }} mb-3" type="submit"
        value="{{ $formMode === 'edit' ? 'Editar' : 'Crear' }}"></input>
</div>