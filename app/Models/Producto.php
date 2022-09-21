<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; //Se dirige a la tabla
    protected $primaryKey = "id";

    public function inventarios(){
        return $this->hasMany(Inventario::class);
    }
}
