<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneos extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';
    public static string $IMAGE_DEFAULT = 'https://';
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

    public function vacantes()
    {
        return $this->belongsTo(Tenistas::class, 'vacantes', 'id');
    }

    public function scopeFiltrar($query, $search, $vacantes){
        $query->whereRaw('LOWER(name) LIKE ?', ["%" . strtolower($search) . "%"]);
        if($vacantes && $vacantes != 1){
            $query->where('vacantes', $vacantes);
        }
        return $query;
    }
}
