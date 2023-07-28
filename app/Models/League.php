<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    
    public function games(){
        return $this->hasMany(Game::class);
    }
    
    public function getByleague(int $limit_count = 5){
        return $this->games()->with('league')->orderBy('league_id', 'DESC')->paginate($limit_count);
    }
}
