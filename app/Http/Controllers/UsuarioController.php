<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{


public function index(){
//Selecet * from usuario
    $Cliente= Cliente::all();


 return view('/administracion/clientes')->with('objetos',$Cliente);



}

//es una vista
public function create(){

    return view('/Login/Login');


    
}
public function store(Request $request){
    //dd($request->all());

   $Cliente=new Cliente();


   $Cliente-> user= $request->usuario;
   $Cliente-> nombre= $request->nombre;
   $Cliente-> apellidos = $request->apellidos;
   $Cliente-> email = $request->correo;
   $Cliente-> password=$request->contrasena;
   $Cliente-> telefonmo=$request->telefono;
   $Cliente->imagen='admin_default.jpg';

   $Cliente-> save();


if($request->hasFile('foto')){

  $img=$request->file('foto');
  $nuevo='imagen_' . $Cliente->id . '.' . $img->extension();
  $ruta=$img->storeAs('imagenes/usuarios',$nuevo,'public');
  $Cliente->imagen=asset('storage/'.$ruta);
  $Cliente->save();
}
return view('/Login/login')->with('success', 'Cuenta creada exitosamente');
}






}
