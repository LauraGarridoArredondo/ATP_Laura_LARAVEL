<?php

namespace App\Http\Controllers;

use App\Models\Tenistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class TenistasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            // Filtra los tenistas según el nombre
            $tenistas = Tenistas::where('nombre', 'like', "%{$search}%")->get();
        } else {
            // Si no hay búsqueda, muestra todos los tenistas
            $tenistas = Tenistas::all();
        }

        return view('tenistas.index', compact('tenistas'));
    }

    public function vista(Request $request)
    {
        $tenistas = Tenistas::all();
        return view('tenistas.vista', compact('tenistas'));
    }


    public function show($id)
    {
        $tenista = $this->getTenistas($id);
        return view('tenistas.show', compact('tenista'));
    }

    public function create()
    {
        return view('tenistas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'min:4|max:120|required',
            'pais' => 'min:4|max:120|required',
            'fecha_nacimiento' => 'required',
            'edad' => 'integer|min:1|max:80|required',
            'altura' => 'integer|min:1|max:300|required',
            'peso' => 'integer|min:1|max:300|required',
            'fecha_debut' => 'required',
            'mano' => 'required',
            'reves' => 'required',
            'entrenador' => 'min:4|max:120|required',
            'dinero_ganado' => 'numeric|min:0|max:100000|required',
            'mejor_ranking' => 'integer|min:0|max:100|required',
            'num_victorias' => 'integer|min:0|max:100|required',
            'num_derrotas' => 'integer|min:0|max:100|required',
            'imagen' => 'image|required',
        ]);

        try {
            $tenista = new Tenistas();
            $tenista->fill($request->all());

            if ($request->hasFile('imagen')) {
                $path = $request->file('imagen')->store('public/images');
                $tenista->imagen = basename($path);
            }

            $tenista->save();
            return redirect()->route('tenistas.show', $tenista->id);
        } catch (\Exception $e) {
            return redirect()->route('tenistas.create')->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $tenista = Tenistas::findOrFail($id);
            return view('tenistas.edit', compact('tenista'));
        } catch (\Exception $e) {
            return redirect()->route('tenistas.index')->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $tenista = Tenistas::findOrFail($id);
            $tenista->fill($request->all());

            if ($request->hasFile('imagen')) {
                $path = $request->file('imagen')->store('public/images');
                $tenista->imagen = basename($path);
            }

            $tenista->save();
            return redirect()->route('tenistas.show', $tenista->id);
        } catch (\Exception $e) {
            return redirect()->route('tenistas.edit', $tenista->id)->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $tenista = Tenistas::findOrFail($id);
            $tenista->delete();
            Log::info('Tenista eliminado correctamente: ' . $tenista->id);
            return redirect()->route('tenistas.index')->with('success', 'Tenista eliminado correctamente.');
        } catch (\Exception $e) {
            Log::error('Error al eliminar el tenista: ' . $e->getMessage());
            return redirect()->route('tenistas.index')->with('error', 'Error al eliminar el tenista: ' . $e->getMessage());
        }
    }



    public function editImage($id)
    {
        try {
            $tenista = Tenistas::find($id);
            Log::info("Tenista editado correctamente: " . $tenista->id);
            return view('tenistas.editImage', compact('tenista'));
        } catch (\Exception $e) {
            Log::error("Error al editar el tenista: " . $e->getMessage());
            return redirect()->route('tenistas.index')->with('error', $e->getMessage());
        }
    }

    public function updateImage(Request $request, $id)
    {
        try {
            $tenista = Tenistas::find($id);
            if ($request->hasFile('imagen')) {
                $path = $request->file('imagen')->store('public/images');
                $tenista->imagen = basename($path);
                $tenista->save();
            }
            return redirect()->route('tenistas.show', $tenista->id);
        } catch (\Exception $e) {
            return redirect()->route('tenistas.edit', $tenista->id)->with('error', $e->getMessage());
        }
    }

    public function recover($id)
    {
        try {
            $tenista = Tenistas::onlyTrashed()->findOrFail($id);
            $tenista->restore();
            return redirect()->route('tenistas.index');
        } catch (\Exception $e) {
            return redirect()->route('tenistas.index')->with('error', $e->getMessage());
        }
    }

    private function getTenistas($id)
    {
        return Cache::remember("tenistas_{$id}", 60, function () use ($id) {
            return Tenistas::findOrFail($id);
        });
    }
}
