<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model{
    use HasFactory;
    //protected $table = "users";

    //$fillable, hay que agregar lo que se mandará, ignora lo demás
        //protected $fillable = ['name', 'descripcion', 'categoria'];
    //$guarded lo que hace es proteger el campo indicado, lo demás lo manda
        protected $guarded = ['status'];
    //Hay que saber usar la que generé menos código

    public function getRouteKeyName(){ return 'slug'; }
}
