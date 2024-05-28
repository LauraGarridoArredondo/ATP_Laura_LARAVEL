<?php

namespace App\Http\Controllers;

use App\Models\Tenistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TenistasController extends Controller
{

    public function index(Request $request)
    {
       $tenistas= Tenistas::all();
        return view('tenistas.index')->with('tenistas', $tenistas);
    }

    public function show($id)
    {
        $tenista = Tenistas::find($id);
        return view('tenistas.show')->with('tenista', $tenista);
    }

    public function create(){
        return view('tenistas.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'min:4|max:120|required',
            'pais' => 'min:4|max:120|required',
            'fecha_nacimiento' => 'required',
            'edad' => 'min:1|max:80|required',
            'altura' => 'min:1|max:300|required',
            'peso' => 'min:1|max:300|required',
            'fecha_debut' => 'required',
            'mano' => 'required',
            'reves' => 'required',
            'entrenador' => 'min:4|max:120|required',
            'dinero_ganado' => 'min:0|max:100000|required',
            'mejor_ranking' => 'min:0|max:100|required',
            'num_victorias' => 'min:0|max:100|required',
            'num_derrotas' => 'min:0|max:100|required',
            'imagen' => 'required',
        ]);
        try {
            $tenista = new Tenistas();
            $tenista->nombre = $request->nombre;
            $tenista->pais = $request->pais;
            $tenista->fecha_nacimiento = $request->fecha_nacimiento;
            $tenista->edad = $request->edad;
            $tenista->altura = $request->altura;
            $tenista->peso = $request->peso;
            $tenista->fecha_debut = $request->fecha_debut;
            $tenista->mano = $request->mano;
            $tenista->reves = $request->reves;
            $tenista->entrenador = $request->entrenador;
            $tenista->dinero_ganado = $request->dinero_ganado;
            $tenista->mejor_ranking = $request->mejor_ranking;
            $tenista->num_victorias = $request->num_victorias;
            $tenista->num_derrotas = $request->num_derrotas;
            $tenista->imagen = $request->imagen;
            $tenista->save();
            return redirect()->route('tenistas.show', $tenista->id);
        } catch (\Exception $e) {
            return redirect()->route('tenistas.create')->with('error', $e->getMessage());
        }
    }

    public function edit($id){
        try {
            $tenista = $this->tenistas->find($id);
            return view('tenistas.edit')->with('tenista', $tenista);
        }catch (\Exception $e) {
            return redirect()->route('tenistas.index')->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, $id){
        try {
            $tenista = $this->tenistas->find($id);
            $tenista->nombre = $request->nombre;
            $tenista->pais = $request->pais;
            $tenista->fecha_nacimiento = $request->fecha_nacimiento;
            $tenista->edad = $request->edad;
            $tenista->altura = $request->altura;
            $tenista->peso = $request->peso;
            $tenista->fecha_debut = $request->fecha_debut;
            $tenista->mano = $request->mano;
            $tenista->reves = $request->reves;
            $tenista->entrenador = $request->entrenador;
            $tenista->dinero_ganado = $request->dinero_ganado;
            $tenista->mejor_ranking = $request->mejor_ranking;
            $tenista->num_victorias = $request->num_victorias;
            $tenista->num_derrotas = $request->num_derrotas;
            $tenista->imagen = $request->imagen;
            $tenista->save();
            return redirect()->route('tenistas.show', $tenista->id);
        }catch (\Exception $e) {
            return redirect()->route('tenistas.edit', $tenista->id)->with('error', $e->getMessage());
        }
    }
    public function destroy($id){
        try {
            $tenista = $this->tenistas->find($id);
            $tenista->delete();
            return redirect()->route('tenistas.index');
        }catch (\Exception $e) {
            return redirect()->route('tenistas.index')->with('error', $e->getMessage());
        }
    }
    public function editImage($id)
    {
        try {
            $tenista = $this->tenistas->find($id);
            return view('tenistas.editImage')->with('tenista', $tenista);
        }catch (\Exception $e) {
            return redirect()->route('tenistas.index')->with('error', $e->getMessage());
        }
    }

    public function updateImage(Request $request, $id)
    {
        try {
            $tenista = $this->tenistas->find($id);
            $tenista->imagen = $request->imagen;
            $tenista->save();
            return redirect()->route('tenistas.show', $tenista->id);
        }catch (\Exception $e) {
            return redirect()->route('tenistas.edit', $tenista->id)->with('error', $e->getMessage());
        }
    }

    public function recover($id)
    {
        try {
            $tenista = $this->tenistas->onlyTrashed()->find($id);
            $tenista->restore();
            return redirect()->route('tenistas.index');
        }catch (\Exception $e) {
            return redirect()->route('tenistas.index')->with('error', $e->getMessage());
        }
    }

    private function getTenistas($id)
    {
        return Cache::has('tenistas_'.$id) ? Cache::get('tenistas_'.$id) : $this->tenistas->find($id);
    }
}
