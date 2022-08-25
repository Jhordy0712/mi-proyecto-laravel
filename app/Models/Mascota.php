<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table='mascotas';
    protected $primaryKey='id_mascotas';

    public $incrementing=true;
    public $timestamps=false;

    public $fillable=[
    'id_mascotas',
    'nombre',
    'tipo',
    'id_usuarios'

    ];
}
