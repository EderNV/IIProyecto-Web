<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table = 'propiedades';

    protected $fillable = ['nombre', 'ubicacion', 'descripcion', 'banco', 'dimension', 'precio', 'foto'];

    public function comentarios() {
    	return $this->hasMany('App\Comentario');
    }
}
