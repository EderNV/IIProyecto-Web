<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TerrenosModel;

class TerrenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terreno = TerrenosModel::orderBy('id', 'ASC')->paginate(10);
        return view('terrenos.index')->with('terreno', $terreno);
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
        $terreno = new TerrenosModel($request->all());        
        $terreno->save();
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
        //$terreno = TerrenosModel::find($id);
        //dd($terreno);

        $terrenos = TerrenosModel::all();

        return view('terrenos.index', ['listaTerrenos' => $terrenos]);
    }
}
