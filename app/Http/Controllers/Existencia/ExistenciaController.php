<?php

namespace App\Http\Controllers\Existencia;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Existencia;
use Auth;

use Illuminate\Http\Request;

class ExistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $existencia = Existencia::all();
        $userid = Auth::id();

        return view('Existencia.existencia.index', compact('existencia','userid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Existencia.existencia.create');
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
        
        Existencia::create($requestData);

        return redirect('/existencia')->with('flash_message', 'Existencia added!');
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
        $existencia = Existencia::findOrFail($id);
        return view('Existencia.existencia.show', compact('existencia'));
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
        $existencia = Existencia::findOrFail($id);
        return view('Existencia.existencia.edit', compact('existencia'));
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
        
        $existencia = Existencia::findOrFail($id);
        $existencia->update($requestData);

        return redirect('/existencia')->with('flash_message', 'Existencia updated!');
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
        Existencia::destroy($id);

        return redirect('/existencia')->with('flash_message', 'Existencia deleted!');
    }
}
