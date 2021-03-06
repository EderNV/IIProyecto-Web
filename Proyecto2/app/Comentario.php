<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = "comentarios";

    protected $fillable = ['propiedad_id', 'usuario_id', 'texto'];

   /* public function terreno() {
    	return $this->belongsTo('App\Propiedad');
    }*/

    public function user() {
    	return $this->belongsTo('App\User');
    }

}
