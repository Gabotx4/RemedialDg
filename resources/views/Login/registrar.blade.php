<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-700 h-screen flex flex-col items-center justify-center">
    <nav class="bg-white border-gray-200 dark:bg-gray-800 w-full fixed top-0">
        <div class="max-w-screen-xl mx-auto p-4 flex justify-center items-center">
            <a href="/Login" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo.png') }}" class="h-12" alt="logo" />
                <span class="text-2xl font-semibold dark:text-white">Natural Art</span>
            </a>
        </div>
    </nav>
    <div class="flex-grow flex justify-center items-center w-full mt-16">
        <div class="flex flex-col items-center bg-white shadow-lg rounded-lg p-8 space-y-8 w-full max-w-lg">
            
            
            
            <form action="/user/gaurdar" class="w-full space-y-6"  method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Usuario -->
                <div class="mb-4">
                    <label for="usuario" class="block text-gray-700">Usuario <span class="text-red-500">*</span></label>
                     <!--  input Nombre -->
                    <input type="text" id="usuario"  name="usuario"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 "placeholder="Ingrese Usuario">
                    @error('nombre')
                        <span class="text-red-500">Inserta un usuario valido</span>
                    @enderror
                </div>

                <!-- Nombre -->
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700">Nombre <span class="text-red-500">*</span></label>
                   <input type="text" id="nombre" name="nombre"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese Nombre">
                    @error('nombre')
                        <span class="text-red-500">Inserta un nombre valido</span>
                    @enderror
                </div>

                <!-- Apellido -->
                <div class="mb-6">
                    <label for="apellidos" class="block text-gray-700">Apellidos <span class="text-red-500">*</span></label>


                    <input type="text" id="apellidos" name="apellidos" maxlength="255" required 
                     class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese apellido">
                </div>

                <!-- Contraseña -->
                <div class="mb-6">
                    <label for="contrasena" class="block text-gray-700">Contraseña <span class="text-red-500">*</span></label>

                    <input type="password" id="contrasena" name="contrasena" maxlength="255"  minlength="3"
                     class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese contraseña">
                </div>

                <!-- Correo Electrónico -->
                <div class="mb-6">
                    <label for="correo" class="block text-gray-700">Correo Electrónico <span class="text-red-500">*</span></label>

                    <input type="email" id="correo"   name="correo" maxlength="255" minlength="5" required
                    lass="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese correo">
                </div>

                <!-- Teléfono -->
                <div class="mb-6">
                    <label for="telefono" class="block text-gray-700">Número de Teléfono <span class="text-red-500">*</span></label>

                    <input type="text" id="telefono" name="telefono" minlength="9"  maxlength="11" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingresa tu número">
                </div>
                
                <div class="mb-6">
                    <label for="foto" class="block text-gray-700">Foto del Platillo</label>
                    <input type="file" id="foto" name="foto" accept="image/*" required
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-100">
                    <div class="mt-1 text-sm text-gray-500">Sube una imagen representativa del platillo.</div>
                    
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit" class="w-52 h-12 shadow-sm rounded-full bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 text-white text-base font-semibold leading-7">Crear Cuenta</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
