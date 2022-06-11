<?php

namespace App\Http\Controllers\Csv;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Csv;
use Illuminate\Http\Request;

class CsvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 1000;

        if (!empty($keyword)) {
            $csv = Csv::where('csv_filename', 'LIKE', "%$keyword%")
                ->orWhere('csv_header', 'LIKE', "%$keyword%")
                ->orWhere('csv_data', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $csv = Csv::latest()->paginate($perPage);
        }

        return view('Csv.csv.index', compact('csv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Csv.csv.create');
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
        
        Csv::create($requestData);

        return redirect('csv')->with('flash_message', 'Csv added!');
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
        $csv = Csv::findOrFail($id);

        return view('Csv.csv.show', compact('csv'));
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
        $csv = Csv::findOrFail($id);

        return view('Csv.csv.edit', compact('csv'));
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
        
        $csv = Csv::findOrFail($id);
        $csv->update($requestData);

        return redirect('csv')->with('flash_message', 'Csv updated!');
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
        Csv::destroy($id);

        return redirect('csv')->with('flash_message', 'Csv deleted!');
    }
}
