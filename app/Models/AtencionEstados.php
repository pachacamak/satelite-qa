<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AtencionEstados extends Model
{
    protected $fillable = [
        'name',
        'color',
        'irechazo',
        'iavance',
        'descripcion',
        'id_empresa',
        'accion_id',
        'tipo_id',
        'actividades',
    ];

    protected $casts = [
        'actividades' => 'array',
    ];

    public function accionestado() {

        return $this->belongsTo(AccionEstadoAtencion::class, 'accion_id');
    }

    public function acciontipoatencion() {
        return $this->belongsTo(TipodeAtencion::class,'tipo_id');
    }

    public function obraporimpuesto() {
        return $this->hasMany(ObraporImpuesto::class,'estado_id');
    }

    public function atencion_estado() {
        return $this->hasMany(ActividadesEjecucion::class,'atencion_estado_id');
    }

    public function actividades(): HasMany
    {
        return $this->hasMany(ActividadEstadoAtencion::class, 'id_estado_atencion');
    }

    protected static function booted()
    {
        static::deleting(function ($estado) {
            $estado->actividades()->delete();
        });
    }
}
