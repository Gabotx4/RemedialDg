@extends('/plantillas/Padmin')

@section('titulo', 'Editar Platillo')

@section('content')

<div class="flex-grow flex justify-center items-center w-full mt-16">
    <div class="flex flex-col items-center bg-white shadow-lg rounded-lg p-8 space-y-8 w-full max-w-lg">
        <form action="/actualizar/platillo/{{$objetos->id}}" class="w-full space-y-6" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nombre del Platillo -->
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">Nombre del platillo <span class="text-red-500">*</span></label>
                <input type="text" id="nombre" name="nombre" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" 
                       placeholder="Ingrese el nombre del platillo" 
                       value="{{ $objetos->nombre_platillo }}">
                @error('nombre')
                    <span class="text-red-500">Inserta un nombre válido</span>
                @enderror
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700">Descripción del producto <span class="text-red-500">*</span></label>
                <input type="text" id="descripcion" name="descripcion" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" 
                       placeholder="Ingrese una descripción" 
                       value="{{ $objetos->detalle_platillo }}">
            </div>

            <!-- Cantidad Disponible -->
            <div class="mb-6">
                <label for="estado" class="block text-gray-700">Cantidad disponible <span class="text-red-500">*</span></label>
                <input type="number" id="estado" name="estado" required 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" 
                       placeholder="Ingrese cantidad" 
                       value="{{ $objetos->estado }}">
            </div>

            <!-- Precio -->
            <div class="mb-6">
                <label for="precio" class="block text-gray-700">Precio <span class="text-red-500">*</span></label>
                <input type="number" id="precio" name="precio" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" 
                       placeholder="Ingrese el precio" 
                       value="{{ $objetos->precio_unitario }}">
            </div>

            <!-- Imagen -->
            <div class="mb-6">
                <img src="{{$objetos->imagen}}" alt="{{$objetos->imagen}}" class="w-24 h-auto mx-auto t">
                <!-- Input para cargar una nueva imagen -->
                <input type="file" id="imagen" name="imagen" accept="image/*" 
                       class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-100" 
                       onchange="mostrarNombreImagen()">
                <div class="mt-1 text-sm text-gray-500">Sube una imagen representativa del platillo.</div>

                <!-- Mostrar el nombre del archivo seleccionado -->
                <p id="nombreImagen" class="mt-2 text-sm text-gray-500"></p>
            </div>

            <!-- Botón de Enviar -->
            <div class="flex items-center justify-center">
                <button type="submit" class="w-52 h-12 shadow-sm rounded-full bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 text-white text-base font-semibold leading-7">Editar Platillo</button>
            </div>
        </form>
    </div>
</div>

<script>
    function mostrarNombreImagen() {
        const input = document.getElementById('imagen');
        const nombreImagen = document.getElementById('nombreImagen');
        if (input.files && input.files.length > 0) {
            nombreImagen.textContent = `Archivo seleccionado: ${input.files[0].name}`;
        } else {
            nombreImagen.textContent = '';
        }
    }
</script>

@endsection