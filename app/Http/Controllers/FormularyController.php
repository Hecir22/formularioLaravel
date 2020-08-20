<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulary;

class FormularyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formularies = Formulary::latest()->paginate(1000000);

            return view('formularies.index', compact('formularies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('formularies.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $formulary = new Formulary($request->all());
            $formulary->save();

            return redirect('/formulary')->with('success', 'Los datos del formulario han sido añadidos exitósamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formulary = Formulary::find($id);
        return view('formularies.edit', compact('formulary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formulary = Formulary::find($id);
        $formulary->fill($request->all());
        $formulary->save();

        return redirect('/formulary')->with('success', 'Datos del formulario actualizados exitósamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formulary = Formulary::find($id);
        $formulary->delete();

        return redirect('/formulary')->with('success', 'Los datos del formulario han sido eliminado exitosamente');
    }
}
