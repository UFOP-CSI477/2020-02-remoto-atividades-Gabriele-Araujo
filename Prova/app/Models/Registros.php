<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $table='registros';
    protected $fillable=['id', 'pessoa_id', 'unidade_id', 'vacina_id', 'dose', 'data'];
}
