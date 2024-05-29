<?php

namespace App\Http\Controllers;

use App\Models\Tenistas;
use App\Models\Torneos;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class TorneosController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            // Filtra los tenistas según el nombre
            $torneos = Torneos::where('ubicacion', 'like', "%{$search}%")->get();
        } else {
            // Si no hay búsqueda, muestra todos los tenistas
            $torneos = Torneos::all();
        }

        return view('torneos.index', compact('torneos'));
    }
    public function vista(Request $request)
    {
        $torneos= Torneos::all();
        return view('torneos.vista')->with('torneos', $torneos);
    }

    public function torneos(){
        $torneos = Torneos::orderBy('id', 'asc')->paginate(3)();
        return view('torneos.torneos')->with('torneos', $torneos);
    }

    public function show($id){
        $torneos = $this->getTorneo($id);
        return view('torneos.show', compact('torneos'));
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
            'modalidad' => 'required',
            'categoria' => 'required',
            'superficie' => 'required',
            'vacantes' => 'required',
            'premios' => 'min:4|max:120|required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'imagen' => 'required'
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
    public function edit($id) {
        try {
            $torneo = Torneos::findOrFail($id);
            return view('torneos.edit', compact('torneo'));
        } catch (Exception $e) {
            return redirect('/torneos')->with('error', $e->getMessage());
        }
    }


    public function update(Request $request, $id) {
        $request->validate([
            'ubicacion' => 'min:4|max:120|required',
            'modalidad' => 'required',
            'categoria' => 'required',
            'superficie' => 'required',
            'vacantes' => 'required',
            'premios' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        try {
            $torneo = Torneos::findOrFail($id);
            $torneo->ubicacion = $request->ubicacion;
            $torneo->modalidad = $request->modalidad;
            $torneo->categoria = $request->categoria;
            $torneo->superficie = $request->superficie;
            $torneo->vacantes = $request->vacantes;
            $torneo->premios = $request->premios;
            $torneo->fecha_inicio = $request->fecha_inicio;
            $torneo->fecha_fin = $request->fecha_fin;
            $torneo->save();

            return redirect('/torneos')->with('success', 'Torneo actualizado');
        } catch (Exception $e) {
            return redirect('/torneos')->with('error', $e->getMessage());
        }
    }

    public function destroy($id){
        try {
            $torneo = Torneos::findOrFail($id);
            $torneo->delete();
            Log::info('Torneo eliminado correctamente: ' . $torneo->id);
            return redirect()->route('torneos.index')->with('success', 'Torneo eliminado correctamente.');
        }catch (Exception $e){
            Log::error('Error al eliminar el torneo: ' . $e->getMessage());
            return redirect()->route('torneos.index')->with('error', 'Error al eliminar el torneo: ' . $e->getMessage());
        }
    }

    public function editImage($id)
    {
        try {
            $torneo = Torneos::find($id);
            Log::info("Torneo editado correctamente: " . $torneo->id);
            return view('torneos.editImage', compact('torneo'));
        }catch (\Exception $e){
            Log::error("Error al editar el torneo: " . $e->getMessage());
            return redirect()->route('torneos.index')->with('error', $e->getMessage());
        }
    }

    public function updateImage(Request $request, $id)
    {
        try {
            $torneo = Tenistas::find($id);
            if ($request->hasFile('imagen')) {
                $path = $request->file('imagen')->store('public/images');
                $torneo->imagen = basename($path);
                $torneo->save();
            }
            return redirect()->route('torneos.show', $torneo->id);
        } catch (\Exception $e) {
            return redirect()->route('torneos.edit', $torneo->id)->with('error', $e->getMessage());
        }
    }


    public function getTorneo($id)
    {
        return Cache::remember("torneos_{$id}", 60, function () use ($id) {
            return Torneos::findOrFail($id);
        });
    }
}
