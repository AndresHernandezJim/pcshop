<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'Categoria';
    protected $primaryKey="id";
    protected $fillable = ['id', 'nombre', 'nivel', 'pertenece'];
    public $timestamps = false;
}
