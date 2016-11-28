<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Propiedad;
use App\User;
use Auth;
use Mail;
use Laracasts\Flash\Flash;

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
        $user=Auth::user()->type;
        return view('terrenos.index', ['terrenos' => $terrenos, 'usuario'=>$user]);
    }

    
    public function filtros(Request $request)
    {
    
     // dd($request);
        $terrenos = Propiedad::all();
       // dd($terrenos);
        $user=Auth::user()->type;
        return view('terrenos.filtro', ['terrenos' => $terrenos,'filtro'=>$request, 'usuario'=>$user]);
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
        $propiedad = Propiedad::find($id);
        //dd($propiedad);
        //return view('terrenos.show')->with('propiedad', $propiedad);
        $comentarios = $propiedad->comentarios;
        //dd($listacomentarios);
        return view('terrenos.show')->with('propiedad', $propiedad)->with('comentarios', $comentarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propiedad = Propiedad::find($id);
        return view('terrenos.edit')->with('propiedad', $propiedad);
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
        //dd($request->all());
        $propiedad = Propiedad::find($id);
        $propiedad->nombre = $request->nombre;
        $propiedad->ubicacion = $request->ubicacion;
        $propiedad->descripcion = $request->descripcion;
        $propiedad->banco = $request->banco;
        $propiedad->dimension = $request->dimension;
        $propiedad->precio = $request->precio;
        $propiedad->foto = $request->foto;
        $propiedad->save();

        Flash::warning('La propiedad ha sido modificada de manera exitosa');
        return redirect()->route('propiedades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->delete();

        Flash::warning('La propiedad ha sido eliminada de manera exitosa');
        return redirect()->route('propiedades.index');
    }



    public function send($id)
    {
        $propiedad = Propiedad::find($id);
        $datos = array( 'nombre'        => $propiedad->nombre, 
                        'ubicacion'     => $propiedad->ubicacion,
                        'descripcion'   => $propiedad->descripcion,
                        'banco'         => $propiedad->banco,
                        'dimension'     => $propiedad->dimension,
                        'precio'        => $propiedad->precio,
                        'foto'          => $propiedad->foto
                );

        $usuario = User::find(Auth::id());
        Mail::send('emails.estate', $datos, function($msj) {
            $msj->subject('Información de Propiedad');
            $msj->to(User::find(Auth::id())->email);
        });
        Flash::success('Mensaje enviado correctamente');
        return Redirect::back()->with('id', $id);
        
    }
}