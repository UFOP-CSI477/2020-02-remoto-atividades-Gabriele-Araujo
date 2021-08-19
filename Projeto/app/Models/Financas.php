<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financas extends Model
{
    public $timestamps = false; 
    use HasFactory;
    protected $table='financas';
    protected $fillable=['data','name','valor'];
}
