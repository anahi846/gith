<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $table = 'puesto';

    protected $fillable = [
        'Nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'Edad',
        'FechaIngreso',
        'Puesto',
    
    ];
    
    
    protected $dates = [
        'FechaIngreso',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/puestos/'.$this->getKey());
    }
}
