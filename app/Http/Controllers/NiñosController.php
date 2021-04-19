<?php

namespace App\Http\Controllers;

use App\Models\Niño;
use Illuminate\Http\Request;

class NiñosController extends Controller
{
    public function index(){
        $niños = Niño::all();
        return view('niños.index', compact('niños'));
    }

    public function show(Niño $id_kid)
    {
        if (strlen($id_kid->nacimiento) < 10) {
            $temp = $id_kid->nacimiento[8];
            $newdate = substr($id_kid->nacimiento, 0, 8) . "0" . $temp;
            $id_kid->nacimiento = $newdate;
        }

        if (strlen($id_kid->ingreso) < 10) {
            $temp = $id_kid->ingreso[8];
            $newdate = substr($id_kid->ingreso, 0, 8) . "0" . $temp;
            $id_kid->ingreso = $newdate;
        }
        $niño = $id_kid;
        return view('niños.show', compact('niño'));
    }

    public function edit(Niño $id_kid)
    {
        if (strlen($id_kid->nacimiento) < 10) {
            $temp = $id_kid->nacimiento[8];
            $newdate = substr($id_kid->nacimiento, 0, 8)."0".$temp;            
            $id_kid->nacimiento = $newdate;
        }

        if (strlen($id_kid->ingreso) < 10) {
            $temp = $id_kid->ingreso[8];
            $newdate = substr($id_kid->ingreso, 0, 8) . "0" . $temp;
            $id_kid->ingreso = $newdate;
        }
        $niño = $id_kid;
        return view('niños.edit', compact('niño'));
    }

    public function update(Niño $id_kid)
    {  
        $data = request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'registro_civil' => 'required',
            'nacimiento' => 'required',
            'ingreso' => 'required',
            'genero' => 'required',
            'medico' => 'required',
            'alergias' => 'required',
            'cometarios' => 'required'
        ]);

        $updated = Niño::where('id', $id_kid->id)->update($data);
        return redirect('/niños');
    }
}
