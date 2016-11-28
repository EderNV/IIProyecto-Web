<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Auth;

class UserControl extends Controller
{
    /**
     * Display a listing of the resource.
     *

     * @return \Illuminate\Http\Response
     */
public function __construct()
{
    $this->middleware('auth');
}
    
    public function index()
    {

        $Usuario= User::orderBy('id','ASC')->paginate(10);
         $user=Auth::user()->type;
        return view ('usuarios/indexUser')->with(['Usuario'=>$Usuario, 'usuario'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
        $usuario=new User($request->all()); 
        $usuario->password=bcrypt($request->password);       
        $usuario->save();

        flash('Usuario Agregado!!', 'success');
        return redirect()->route('user.index');

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
       // dd($id);
        $usuario= User::find($id);
        return view('modificar')->with('user',$usuario);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       $user=User::find($id);
       //dd($user);
      $user->delete();

      flash('El usuario ('. $user->name. ') ha sido eliminado!!!', 'danger');

      return redirect()->route('user.index');
        
    }

    
}
