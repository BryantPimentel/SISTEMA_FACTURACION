<?php

namespace App\Http\Controllers\Usuarios;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Profile;
use Illuminate\Http\Request;
use App\User;
use App\RoleUser;
use Caffeinated\Shinobi\Models\Role;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */


    public function index(Request $request)
    {
        
        $usuarios = Usuario::all();
       
        return view('Usuarios.usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::get();
        return view('Usuarios.usuarios.create', compact('roles'));
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

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'name' => ['required', 'string', 'unique:users'],
        ]);
        
        $requestData = $request->all();
        $requestData['password'] = Hash::make($requestData['password']);
        
        //profile
        /*if ($request->file('avatar') == null) {
        
            $path = "avatars/default.jpg";
        
        }else{
        
            $path = $request->file('avatar')->store('avatars'); 
        
        }*/

        $user = Usuario::create($requestData);
        
        $guardarol = [ 'role_id' => $requestData['roles'], 'user_id' => $user->id ];
        RoleUser::create($guardarol);

        //$profile = ["id"=> $user->id, "user_id" => $user->id, "avatar" => $path];
        //$profiles = array_merge($requestData, $profile);

        //Profile::create($profiles);
        

        return redirect('users')->with('success', 'User Created!');
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
        $usuario = Usuario::findOrFail($id);
        //$model = new UserModel();
        //$profile = $model->getProfileUser($id);
        $model2 = new Role();
        $rol = $model2->getRolUser($id);

        /*foreach($profile as $item){
        
            $avatar = $item->avatar;
            $tipopago = $item->tipo_pago;
        
        }*/
        
        foreach($rol as $item){
        
            $roleid = $item->name;
        
        }

        //if(isset($avatar) && isset($tipopago)){

            //return view('Usuarios.usuarios.show', compact('usuario','avatar','roleid','tipopago'));
    
        //}else{

            return view('Usuarios.usuarios.show', compact('usuario','roleid'));
            
        //}
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

        //$model = new UserModel();
        //$profile = $model->getProfileUser($id);
        $model2 = new Role();
        $rol = $model2->getRolUser($id);
        $roles = Role::get();
        

        /*foreach($profile as $item){
        
            $avatar = $item->avatar;
            $tipopago = $item->tipo_pago;
        
        }*/
        
        foreach($rol as $item){
        
            $roleid = $item->name;
        
        }

        $usuario = Usuario::findOrFail($id);

       // if(isset($avatar) && isset($tipopago)){

            //return view('Usuarios.usuarios.edit', compact('usuario','avatar','roleid','roles','tipopago'));
    
        //}else{

            return view('Usuarios.usuarios.edit', compact('usuario','roles','roleid'));
            
        //}
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
        $usuario = Usuario::findOrFail($id);

        if($requestData['name'] == $usuario->name){

        }else{
        
            $request->validate([
                'name' => ['required', 'string', 'unique:users'],
            ]);

        }

        $user = User::find($id);
        $user->roles()->sync($request->get('roles'));
        if($requestData['password'] == null){

            $requestData['password'] = $usuario->password;
        
        }else{
            $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed']
            ]);

            $requestData['password'] = Hash::make($requestData['password']);
        
        }

        $usuario->update($requestData);

        //profile
        
        //$profilesave = Profile::findOrFail($id);

        /*if($request->avatar == null) {
            
            $path = $profilesave->avatar;

        }else{
            
            $path = $request->file('avatar')->store('avatars');
        }*/
        
        //$profile = ["user_id" => $usuario->id, "avatar" => $path];
        //$profiles = array_merge($requestData, $profile);

        //$profilesave->update($profiles);
        
        return redirect('users')->with('success', 'User Updated!');
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
        Usuario::destroy($id);
        //Profile::destroy($id);

        return redirect('users')->with('danger', 'User Deleted!');
    }
}
