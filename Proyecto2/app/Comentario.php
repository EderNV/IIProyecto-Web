<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = "comentarios";

    protected $fillable = ['id_terreno', 'id_usuario', 'texto'];

    public function terreno() {
    	return $this->belongsTo('App\TerrenosModel');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }

}
