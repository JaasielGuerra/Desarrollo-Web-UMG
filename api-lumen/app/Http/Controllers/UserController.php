<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return response()->json($usuarios);
    }

    public function show($id){
        $usuarios = User::find($id);
        return response()->json($usuarios);
    }

    public function create(Request $request){
     
        $usuarios = new User();

        $usuarios->name     = $request->name;
        $usuarios->email    = $request->email;       
        
        $usuarios->save();

        return response()->json("cliente  creado con exito!");

    }


    public function update(Request $request, $id){

        $usuarios = User::find($id);

        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
     

        $usuarios->save();

        return response()->json($usuarios);
    }

    public function delete($id){
        $usuarios = User::find($id);
        $usuarios->delete();

        return response()->json('usuario sucessfully deleted!');
    }
    
}
