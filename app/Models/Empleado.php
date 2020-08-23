<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'Nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'Telefono',
        'Edad',
        'FechaNacimiento',
        'LugarNacimiento',
    
    ];
    
    
    protected $dates = [
        'FechaNacimiento',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/empleados/'.$this->getKey());
    }
}
