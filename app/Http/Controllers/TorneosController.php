<?php

namespace App\Http\Controllers;

use App\Models\Tenistas;
use App\Models\Torneos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TorneosController extends Controller
{

    public function index(Request $request)
    {
        $torneos = Torneos::search($request->search, $request->tenistas)->orderBy('id', 'asc')->paginate(3);
        $tenistas = Torneos::all();
        return view('torneos.index')->with('torneos', $torneos)
            ->with('tenistas', $tenistas);
    }

    public function torneos(){
        $torneos = Torneos::orderBy('id', 'asc')->paginate(3)();
        return view('torneos.torneos')->with('torneos', $torneos);
    }

    public function show($id){
        $torneo = $this->torneos->find($id);
        Cache::put('torneo'.$torneo->id, $torneo, 60);
        return view('torneos.show')->with('torneo', $torneo);
    }
    public function create(){
        $torneos = Torneos::where('id', '>', 1)->get();
        return view('torneos.create')->with('torneos', $torneos);
    }
    public function getTorneosByTenistas($id){
        $tenistas = Tenistas::where('id', $id)->get($id)->paginate(3);
        return view('torneos.index')->with('torneos', $tenistas);
    }
    public function store(Request $request){
        $request->validate([
            'ubicacion' => 'min:4|max:120|required',
            'modalildad' => 'required',
            'categoria' => 'required',
            'superficie' => 'required',
            'vacantes' => 'required',
            'premios' => 'min:4|max:120|required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'imagen' => 'required',
        ]);
        try {
            $torneo = new Torneos();
            $torneo->ubicacion = $request->ubicacion;
            $torneo->modalidad = $request->modalidad;
            $torneo->categoria = $request->categoria;
            $torneo->superficie = $request->superficie;
            $torneo->vacantes = $request->vacantes;
            $torneo->premios = $request->premios;
            $torneo->fecha_inicio = $request->fecha_inicio;
            $torneo->fecha_fin = $request->fecha_fin;
            $torneo->imagen = $request->imagen;
            $torneo->save();
            return redirect('/torneos')->with('success', 'Torneo creado');
        }catch (Exception $e){
            return redirect('/torneos')->with('error', $e->getMessage());
        }
    }
    public function edit($id){
        $torneo = $this->torneos->find($id);
        $tenistas = Tenistas::where('id', '>', 1)->get();
        return view('torneos.edit')->with('torneo', $torneo)
            ->with('tenistas', $tenistas);
    }

    public function update(Request $request, $id){
        $request->validate([
            'ubicacion' => 'min:4|max:120|required',
            'modalildad' => 'required',
            'categoria' => 'required',
            'superficie' => 'required',
            'vacantes' => 'required',
            'premios' => 'min:4|max:120|required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'imagen' => 'required',
        ]);
        try {
            $torneo = $this->torneos->find($id);
            $torneo->ubicacion = $request->ubicacion;
            $torneo->modalidad = $request->modalidad;
            $torneo->categoria = $request->categoria;
            $torneo->superficie = $request->superficie;
            $torneo->vacantes = $request->vacantes;
            $torneo->premios = $request->premios;
            $torneo->fecha_inicio = $request->fecha_inicio;
    }catch (Exception $e){
            return redirect('/torneos')->with('error', $e->getMessage());
        }
    }
    public function destroy($id){
        try {
            $torneo = $this->torneos()->find($id);
            $torneo->delete();
            return redirect()->route('torneos.index');
        }catch (\Exception $e) {
            return redirect()->route('torneos.index')->with('error', $e->getMessage());
        }
    }

    public function editImagen($id)
    {
        $torneo = $this->torneos->find($id);
        Cache::put($id, $torneo, 60);
        return view('torneos.editImagen')->with('torneo', $torneo);
    }

    public function updateImagen(Request $request, $id)
    {
        $request->validate([
            'imagen' => 'required',
        ]);
        $torneo = $this->torneos->find($id);
        $torneo->imagen = $request->imagen;
        $torneo->save();
        return redirect()->route('torneos.show', $id);
    }

    public function getTorneo($id)
    {
        $torneo = $this->torneos->find($id);
        Cache::put('torneo'.$torneo->id, $torneo, 60);
        return view('torneos.show')->with('torneo', $torneo);
    }
}
