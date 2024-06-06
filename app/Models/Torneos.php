<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneos extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';
    public static string $IMAGE_DEFAULT = 'https://placeholder.com/300x300';
    protected $fillable = [
        'ubicacion',
        'modalidad',
        'categoria',
        'superficie',
        'vacantes',
        'premios',
        'fecha_inicio',
        'fecha_fin',
        'imagen'
    ];

    /**
     * Esto es para la relacion de torneo con tenistas.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function vacantes()
    {
        return $this->belongsTo(Tenistas::class, 'vacantes', 'id');
    }

    /**
     * Esto es para filtrar por nombre/ubicación del torneo.
     * @param $query
     * @param $search
     * @param $vacantes
     * @return mixed
     */
    public function scopeFiltrar($query, $search, $vacantes){
        $query->whereRaw('LOWER(name) LIKE ?', ["%" . strtolower($search) . "%"]);
        if($vacantes && $vacantes != 1){
            $query->where('vacantes', $vacantes);
        }
        return $query;
    }
}
