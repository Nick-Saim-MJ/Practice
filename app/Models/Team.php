<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //En esta linea Protegemos el ID (Un poco de Seguridad)

    		public function posts(){
        		return $this->hasMany(Player::class);
    		}
}
