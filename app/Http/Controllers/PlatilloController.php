<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{


    public function index()
    {
        //select From *
        //select From *
        $Platillos = Platillo::all();

        return view('/administracion/adP')->with('objetos', $Platillos);
    }


    public function edit($id_platillo)
    {
        //Select from platillos

        $id_platillo = Platillo::find($id_platillo);
        return view('/administracion/editarPlatillos')->with('objetos', $id_platillo);
    }

    
    public function update(Request $request, $id)
    {
        //Select from platillos
        $Platillo = Platillo::find($id);

        if (!$Platillo) {
            return redirect()->back()->with('error', 'Platillo no encontrado.');
        }
    
        // Actualizar datos
        $Platillo->nombre_platillo = $request->nombre;
        $Platillo->detalle_platillo = $request->descripcion;
        $Platillo->estado = $request->estado;
        $Platillo->precio_unitario = $request->precio;
    
        // Manejar nueva imagen
        if ($request->hasFile('imagen')) {
            $img = $request->file('imagen');
            $nuevoNombre = 'imagen_' . $Platillo->id . '.' . $img->extension();
            $ruta = $img->storeAs('imagenes/platillos', $nuevoNombre, 'public');
            $Platillo->imagen = asset('storage/' . $ruta);
        }
    
        $Platillo->save();
    
        return redirect('/administracion/adP')->with('success', 'Platillo actualizado con éxito.');


    }

    //es una vista
    public function create(){

        
        return view('/administracion/platillos');

    }
   

       



    public function store(Request $request)
    {


        $Platillo = new Platillo();
        
        $Platillo->nombre_platillo = $request->nombre;
        $Platillo->detalle_platillo = $request->descripcion;
        $Platillo->estado = $request->estado;
        $Platillo->precio_unitario = $request->precio;
        $Platillo->imagen= 'admin_default.jpg';
        $Platillo->save();

        if ($request->hasFile('foto')) {

            $img = $request->file('foto');
            $nuevo = 'imagen_' . $Platillo->id . '.' . $img->extension();
            $ruta = $img->storeAs('imagenes/platillos',$nuevo, 'public');
            $Platillo->imagen=asset('storage/'.$ruta);
            $Platillo->save();
        }

        return view('/administracion/adP')->with('success', 'Registro creado con exito');
    }
}
