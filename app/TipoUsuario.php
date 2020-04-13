<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'tipo_usuarios';
    protected $timestamp = false;
    
    public function usuarios()
    {
    	return $this->hasMany(User::class);
    }
}
