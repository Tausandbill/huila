<?php

namespace App\Http\Controllers;

use App\Models\Cuidador;
use App\Models\Cuidador_Niño;
use App\Models\Niño;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CuidadoresController extends Controller
{
    public function index()
    {
        return view('cuidadores.index');
    }

    public function show(Niño $id_kid)
    {
        $niño = $id_kid->id;
        $cuidadores = DB::table('cuidador_niño')
            ->join('cuidadors', 'cuidador_niño.cuidador_id', '=', 'cuidadors.id')
            ->where('niño_id', $niño)
            ->get();

        return view('cuidadores.show', compact('niño', 'cuidadores'));
    }

    public function create($niño)
    {
        return view('cuidadores.create', compact('niño'));
    }

    public function edit(Cuidador $cuidador)
    {
        return view('cuidadores.edit', compact('cuidador'));
    }
    
    public function store(Niño $id_kid)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'relacion' => 'required',
            'cedula' => 'required',
            'email' => 'required | email',
            'telefono' => 'required',
            'direccion' => 'required'
        ]);
        
        $res = Cuidador_Niño::where('id', 1)->get();
        $cuidador = Cuidador::create($data);

        $data = [
            'cuidador_id' => $cuidador->id,
            'niño_id' => $id_kid->id
        ];

        $cuidador_niño = Cuidador_Niño::create($data);

        return redirect('/cuidadores/'. $id_kid->id);       
    }

    public function update(Cuidador $cuidador)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'relacion' => 'required',
            'cedula' => 'required',
            'email' => 'required | email',
            'telefono' => 'required',
            'direccion' => 'required'
        ]);

        $updated = Cuidador::where('id', $cuidador->id)->update($data);
        return redirect(request()->url);
    }
    
    public function busqueda()
    {
        $tipo = request()->tipo;
        $numero = request()->numero;

        if ($tipo == "cedula") {
            try {
                $cuidador = Cuidador::where('cedula', $numero)->firstOrFail();
                $cuidadores = collect([$cuidador]);
            } catch (ModelNotFoundException $ex) {
                if ($ex) {
                    $cuidadores = [];
                }
            }
        }
        else {
            try {
                $niño = Niño::select('id')->where('registro_civil', $numero)->firstOrFail();

                $cuidadores = DB::table('cuidador_niño')
                ->join('cuidadors', 'cuidador_niño.cuidador_id', '=', 'cuidadors.id')
                ->where('niño_id', $niño->id)
                ->get();
            } catch (ModelNotFoundException $ex) {
                if ($ex) {
                    $cuidadores = [];
                }
            }            
        }

        return view('busqueda.show', compact('cuidadores'));        
    }

    public function archivo(Niño $id_kid)
    {
        $path = request()->file('file')->store('docs', 'public');

        $string = file_get_contents('storage/'.$path);
        $cuidadores = explode("\r\n", $string);

        foreach ($cuidadores as $key => $cuidador) {
            $array = explode(" ", $cuidador);
            $data = [
                'nombre' => $array[0],
                'apellido' => $array[1],
                'relacion' => $array[2],
                'cedula' => $array[3],
                'email' => $array[4],
                'telefono' => $array[5],
                'direccion' => $array[6]
            ];
            $cuidadorGuardado = Cuidador::create($data);

            $data = [
                'cuidador_id' => $cuidadorGuardado->id,
                'niño_id' => $id_kid->id
            ];

            $cuidador_niño = Cuidador_Niño::create($data);
        }

        return redirect('/cuidadores/'. $id_kid->id);
    }
}
