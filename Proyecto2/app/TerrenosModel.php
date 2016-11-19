<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerrenosModel extends Model
{
    protected $table = "Terresnos";

    protected $fillable = ['banco', 'nombre', 'ubicasion', 'descripcion', 'precio', 'dimension'];

    public function comentarios() {
    	return $this->hasMany('App\Comentario');
    }
}
