<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function create()
    {
        return view('ingresar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreAl' => 'required',
            'curso' => 'required',
            'nota1' => 'required',
            'nota2' => 'required',
        ]);

        $alumno = new Alumno;
        $alumno->nombreAl = $request->input('nombreAl');
        $alumno->curso = $request->input('curso');
        $alumno->nota1 = $request->input('nota1');
        $alumno->nota2 = $request->input('nota2');

        $alumno->save();

        return redirect()->route('ingresar.create'); // Redirige a donde quieras después de guardar
    }

    public function index()
    {
        $alumnos = Alumno::all();
        return view('lista', compact('alumnos'));
    }

    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        $promedio = ($alumno->nota1 + $alumno->nota2) / 2;
        $estado = $promedio >= 13.5 ? 'APROBADO' : 'DESAPROBADO';
        return view('alumno_detalle', compact('alumno', 'promedio', 'estado'));
    }

}
