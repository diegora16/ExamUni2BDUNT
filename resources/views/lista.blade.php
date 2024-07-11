@extends('layout')

@section('title', 'Lista')

@section('content')
    <h1 class="text-2xl font-bold text-center my-8 text-blue-600">Lista de Alumnos</h1>

    <ul class="max-w-lg mx-auto bg-gray-100 p-8 rounded-lg shadow-md">
        @foreach ($alumnos as $alumno)
            <li class="mb-4">
                <a href="{{ route('alumno.detalle', ['id' => $alumno->id]) }}" class="text-blue-500 hover:text-blue-700">
                    {{ $alumno->nombreAl }}
                </a>
            </li>
        @endforeach
    </ul>

    
@endsection
