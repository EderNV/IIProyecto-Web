<?php

namespace App\Http\Controllers;



use App\Http\Requests;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    public function create(){
    	return view('create');
    }
    public function store(Request $request){
    	$user= new User($request->all());
        $user->save();
       
    }
    public function show($id){
    	//
    }
    public function edit($id){
    	//
    }

	public function update(Request $request,$id){
    	//
    }
    public function destroy($id){
    	//
    }

 }


