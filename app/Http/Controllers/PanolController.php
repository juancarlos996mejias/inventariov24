<?php

namespace App\Http\Controllers;
use App\Models\panol;
use Illuminate\Http\Request;



class PanolController extends Controller
{
    
     //Display a listing of the resource.
     
    public function index()
    {
       $panols = Panol::paginate();

       return view('panol.index', compact('panols'))
          ->with('i', (request()->input('page', 1) - 1) * $panols->perPage());
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $panol = new Panol();
        return view('panol.create', compact('panol'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Panol::$rules);

        $panol = Panol::create($request->all());

        return redirect()->route('panols.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $panol = Panol::find($id);

        return view('panol.show', compact('panol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $panol = Panol::find($id);

        return view('panol.edit', compact('panol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Panol $panol)
    {
        request()->validate(Panol::$rules);

        $panol->update($request->all());

        return redirect()->route('panols.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect()->route('panols.index')
        ->with('success', 'Eliminado exitosamente');
    }
}
