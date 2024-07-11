@extends('layout')

@section('title', 'Ingresar')

@section('content')
    <h1 class="text-2xl font-bold text-center my-8 text-blue-600">Ingresar Alumno</h1>

    <form action="{{ route('ingresar.store') }}" method="POST" class="max-w-lg mx-auto bg-gray-100 p-8 rounded-lg shadow-md">
        @csrf

        <div class="mb-6">
            <label for="nombre" class="block mb-2 text-blue-700 font-semibold">Nombre del Alumno:</label>
            <input type="text" id="nombre" name="nombreAl" value="{{ old('nombreAl') }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('nombreAl')
                <small class="text-red-500">Rellenar el nombre del alumno</small>
            @enderror
        </div>

        <div class="mb-6">
            <label for="curso" class="block mb-2 text-blue-700 font-semibold">Curso:</label>
            <input type="text" id="curso" name="curso" value="{{ old('curso') }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('curso')
                <small class="text-red-500">Rellenar el nombre del curso</small>
            @enderror
        </div>

        <div class="mb-6">
            <label for="nota1" class="block mb-2 text-blue-700 font-semibold">Nota 1:</label>
            <input type="number" id="nota1" name="nota1" min="0" max="20" value="{{ old('nota1') }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('nota1')
                <small class="text-red-500">Falta rellenar la nota 1</small>
            @enderror
        </div>

        <div class="mb-6">
            <label for="nota2" class="block mb-2 text-blue-700 font-semibold">Nota 2:</label>
            <input type="number" id="nota2" name="nota2" min="0" max="20" value="{{ old('nota2') }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('nota2')
                <small class="text-red-500">Falta rellenar la nota 2</small>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">Guardar</button>
    </form>
@endsection
