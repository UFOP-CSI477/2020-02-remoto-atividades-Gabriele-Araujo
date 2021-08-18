<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesas extends Model
{
    public $timestamps = false; 
    use HasFactory;
    protected $table='despesas';
    protected $fillable=['name','descricao','data','valor'];
}
