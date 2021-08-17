<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamentos extends Model
{
    use HasFactory;
    protected $table='equipamentos';

    public function relUsers(){
        return $this->hasOnde('App\Models\User','id', 'id');
    }
}
