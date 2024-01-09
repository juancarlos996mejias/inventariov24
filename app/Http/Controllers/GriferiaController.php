<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Griferia;


class GriferiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(){

    $griferias = Griferia::all(); // Obtiene todos los usuarios desde la base de datos

return view('griferia.index', ['griferias' => $griferias]); // Retorna la vista 'index' y pasa los usuarios a la vista

}


    
   public function create()
   {
       $griferias = new Griferia();
       return view('griferia.create', compact('griferia'));
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       request()->validate(Griferia::$rules);

       $griferia = Griferia::create($request->all());

       return redirect()->route('griferias.index')
           ->with('success', 'Product created successfully.');
   }

   /**
    * Display the specified resource.
    */
   public function show(string $id)
   {
       $griferia = Griferia::find($id);

       return view('griferia.show', compact('griferia'));
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(string $id)
   {
       $griferia = Griferia::find($id);

       return view('griferia.edit', compact('griferia'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, griferia $griferia)
   {
       request()->validate(Griferia::$rules);

       $griferia->update($request->all());

       return redirect()->route('griferias.index')
           ->with('success', 'Product updated successfully');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id)
   {
       return redirect()->route('griferias.index')
       ->with('success', 'Eliminado exitosamente');
   }



}


    

