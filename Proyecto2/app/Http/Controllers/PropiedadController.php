<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propiedad;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$terrenos = Propiedad::orderBy('id', 'ASC')->paginate(1);
        //return view('terrenos.index')->with('terrenos', $terrenos);
        $terrenos = Propiedad::all();
        return view('terrenos.index', ['terrenos' => $terrenos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terrenos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request.ubicacion);
        $terreno = new Propiedad($request->all());        
        $terreno->save();
        return view('terrenos.create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function view($id)
    {
        //$terreno = Propiedad::find($id);
        //dd($terreno);

        $terrenos = Propiedad::all();

        return view('terrenos.index', ['listaTerrenos' => $terrenos]);
    }
}