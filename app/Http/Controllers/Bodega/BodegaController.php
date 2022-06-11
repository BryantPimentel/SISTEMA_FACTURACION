<?php

namespace App\Http\Controllers\Bodega;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $bodega = Bodega::all();
        return view('Bodega.bodega.index', compact('bodega'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Bodega.bodega.create');
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
        
        Bodega::create($requestData);

        return redirect('/bodega')->with('flash_message', 'Bodega added!');
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
        $bodega = Bodega::findOrFail($id);
        return view('Bodega.bodega.show', compact('bodega'));
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
        $bodega = Bodega::findOrFail($id);
        return view('Bodega.bodega.edit', compact('bodega'));
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
        
        $bodega = Bodega::findOrFail($id);
        $bodega->update($requestData);

        return redirect('/bodega')->with('flash_message', 'Bodega updated!');
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
        Bodega::destroy($id);

        return redirect('/bodega')->with('flash_message', 'Bodega deleted!');
    }
}
