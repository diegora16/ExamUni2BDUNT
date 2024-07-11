@extends('layout')

@section('title', 'Detalle de Alumno')

@section('content')
    <h2 class="text-2xl font-bold text-center my-8 text-blue-600">Detalles de {{ $alumno->nombreAl }}</h2>

    <div class="max-w-lg mx-auto bg-gray-100 p-8 rounded-lg shadow-md">
        <p class="mb-4"><strong class="text-blue-700">Nombre:</strong> {{ $alumno->nombreAl }}</p>
        <p class="mb-4"><strong class="text-blue-700">Curso:</strong> {{ $alumno->curso }}</p>
        <p class="mb-4"><strong class="text-blue-700">Nota 1:</strong> {{ $alumno->nota1 }}</p>
        <p class="mb-4"><strong class="text-blue-700">Nota 2:</strong> {{ $alumno->nota2 }}</p>
        <p class="mb-4"><strong class="text-blue-700">Promedio:</strong> {{ $promedio }}</p>
        <p class="mb-4"><strong class="text-blue-700">Estado:</strong> {{ $estado }}</p>
        <p class="mb-4"><strong class="text-blue-700">Fecha de Registro:</strong> {{ $alumno->created_at->format('d/m/Y') }}</p>

        <a href="{{ route('lista') }}" class="text-blue-500 hover:text-blue-700">Volver a la lista</a>
    </div>
@endsection
