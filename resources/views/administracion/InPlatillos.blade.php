@extends('/plantillas/Padmin')

@section('titulo', 'Platillos')

@section('content')
@if (empty($Platillos))
    <h1 class="my-56 text-center">No hay platillos registrados</h1>
@else
    <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6 my-20">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold">Gestión de Platillos</h1>
            <a href="/nuevop" class="bg-[#67e8f9] text-[#0c0a09] rounded-lg px-4 py-2 hover:bg-[#d8b4fe]">
                Crear Nuevo Platillo
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full text-center">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">Imagen</th>
                        <th class="px-4 py-2">Nombre del Producto</th>
                        <th class="px-4 py-2">Descripción</th>
                        <th class="px-4 py-2">Precio</th>
                        <th class="px-4 py-2">Estado</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Platillos as $item)
                        <tr class="bg-white border-b">
                            <td class="px-4 py-2"> 
                                <img src="{{$item->imagen}}" alt="{{$item->imagen}}">
                                {{$item->imagen}} </td>
                            <td class="px-4 py-2">{{ $item->nombre_platillo }}</td>
                            <td class="px-4 py-2"><img src="{{$item->imagen}}" alt="{{$item->imagen}}">
                                {{$item->imagen}} </td>}</td>
                            <td class="px-4 py-2">${{ number_format($item->precio_unitario, 2) }}</td>
                            <td class="px-4 py-2">{{ $item->estado ? 'Disponible' : 'No Disponible' }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('platillo.edit', $item->id) }}" class="bg-blue-500 text-white rounded-lg px-4 py-2">
                                    Editar
                                </a>
                                <form method="POST" action="{{ route('platillo.delete', $item->id) }}" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white rounded-lg px-4 py-2">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

@endsection