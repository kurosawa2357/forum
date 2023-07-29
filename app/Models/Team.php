<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    
    public function home_games(){
        return $this->hasMany(Game::class, 'home_team_id');
    }

    public function away_games(){
        return $this->hasMany(Game::class, 'away_team_id');
    }
    
    public function users(){
        return $this->hasMany(User::class);
    }
}
