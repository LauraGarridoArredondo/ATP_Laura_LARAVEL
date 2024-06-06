<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenistas extends Model
{
    use HasFactory;

    public static string $IMAGE_DEFAULT = 'https://placeholder.com/300x300';
    protected $table = 'tenistas';
    protected $fillable = [
        'nombre',
        'pais',
        'fecha_nacimiento',
        'edad',
        'altura',
        'peso',
        'fecha_debut',
        'mano',
        'reves',
        'entrenador',
        'dinero_ganado',
        'mejor_ranking',
        'num_victorias',
        'num_derrotas',
        'imagen'
    ];

    /**
     * Conseguir el nombre del tenista por su id.
     * @param int $id
     * @return string|null
     */
    public function getNombrebyId($id){
        $tenista = self::find($id);
        return $tenista ? $tenista->id : null;
    }
    /**
     * Conseguir el id del tenista por su nombre.
     * @param string $name
     * @return int|null
     */
    public function getIdByName($name){
        $tenista = self::where('nombre', $name)->first();
        return $tenista ? $tenista->id : null;
    }
    /**
     * Obtener todos los nombres de los tenistas.
     * @return Collection
     */
    public function getNombres(){
        return self::pluck('nombre');
    }
    /**
     * Actualizar a un tenista sin torneo.
     */
    public function sinTorneo(){
        $this->vacantes = null;
        $this->save();
    }
    /**
     * Buscar los tenistas por su nombre.
     */
    public function scopeBuscar($query, $search){
        $query->whereRaw('LOWER(nombre) LIKE ?', ["%" . strtolower($search) . "%"]);
        return $query;
    }

    /**
     * Obtener los torneos de un tenista.
     */
    public function torneos()
    {
        return $this->hasMany(Torneos::class);
    }
}
