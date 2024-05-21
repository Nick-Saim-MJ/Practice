<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //En esta linea Protegemos el ID (Un poco de Seguridad)

    		public function category(){
        		return $this->belongsTo(Team::class);
    		}
}
