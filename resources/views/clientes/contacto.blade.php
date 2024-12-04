@extends('/plantillas/Pusuarios')




@section('titulo', 'crear')

@section('content')




<div class="grid grid-cols-5 grid-rows-5 gap-4  items-center justify-center bg-gray-100">
    <div class="col-span-3 row-span-2 col-start-2 "><h1 class="text-2xl md:text-4xl lg:text-4xl text-orange-500 font-extrabold italic text-center">Contacto</h1>
        <p class="text-2xl md:text-4xl lg:text-3xl text-orange-500 font-extrabold italic text-center">¡Gracias por visitarnos! <br>Siempre a tu servicio te ofrecemos la siguiente forma para que
            nos contactes, te responderemos a la brevedad posible.</p></div>
    <div class="col-span-3 row-span-3 col-start-2 row-start-3"><form action="https://example.com/contact" method="POST">
        <div class="mb-4"> <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label> <input
                type="text" id="name" name="name"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required> </div>
        <div class="mb-4"> <label for="email" class="block text-gray-700 font-bold mb-2">Correo electrónico</label>
            <input type="email" id="email" name="email"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required> </div>
        <div class="mb-6"> <label for="message" class="block text-gray-700 font-bold mb-2">Platícanos tu
                experiencia</label>
            <textarea id="message" name="message"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                rows="4" required></textarea>
        </div>
       
        <div class="flex items-center justify-center"> <button type="submit"
                class="bg-black text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">ENVIAR</button>
        </div>
    </form>
    <p class="text-center text-sm text-gray-500 mt-4">Al hacer clic en el botón 'ENVIAR' estás de acuerdo con el aviso
        de privacidad.</p></div>
</div>


    

 @endsection