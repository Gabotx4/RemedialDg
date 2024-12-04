@extends('/plantillas/Padmin')

@section('titulo', 'Crear Platillo')

@section('content')
<div class="flex-grow flex justify-center items-center w-full mt-16">
    <div class="flex flex-col items-center bg-white shadow-lg rounded-lg p-8 space-y-8 w-full max-w-lg">
        
        
        
        <form action="/platillo/crear1" class="w-full space-y-6"  method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Usuario -->
            <div class="mb-4">
                <label for="usuario" class="block text-gray-700">Nombre del platillo <span class="text-red-500">*</span></label>
                 <!--  input Nombre -->
                <input type="text" id="nombre"  name="nombre"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 "placeholder="Ingrese Usuario">
                @error('nombre')
                    <span class="text-red-500">Inserta un usuario valido</span>
                @enderror
            </div>

            <!-- Nombre -->
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">DEscripcion del producto <span class="text-red-500">*</span></label>
               <input type="text" id="descripcion" name="descripcion"
               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese Nombre">
             
            </div>

            <!-- Apellido -->
            <div class="mb-6">
                <label for="apellidos" class="block text-gray-700">Cantidad disponible <span class="text-red-500">*</span></label>


                <input type="number" id="estado" name="estado" maxlength="255" required 
                 class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese apellido">
            </div>

            <!-- Contraseña -->
            <div class="mb-6">
                <label for="contrasena" class="block text-gray-700">Precio<span class="text-red-500">*</span></label>

                <input type="number" id="precio" name="precio" maxlength="255"  minlength="3"
                 class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese contraseña">
            </div>

            <!-- Correo Electrónico -->
         

            <!-- Teléfono -->
           
            
            <div class="mb-6">
                <label for="foto" class="block text-gray-700">Foto del Platillo</label>
                <input type="file" id="foto" name="foto" accept= "image/*" required
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-100">
                <div class="mt-1 text-sm text-gray-500">Sube una imagen representativa del platillo.</div>
                
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" class="w-52 h-12 shadow-sm rounded-full bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 text-white text-base font-semibold leading-7">Crear Cuenta</button>
            </div>
        </form>
    </div>
</div>
<br><br><br><br>
@endsection
