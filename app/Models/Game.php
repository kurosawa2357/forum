<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function home_team(){
        return $this->belongsTo(Team::class, 'home_team_id');
    }
    
    public function away_team(){
        return $this->belongsTo(Team::class, 'away_team_id');
    }
    
    public function league(){
        return $this->belongsTo(League::class);
    }
    
    public function post_likes(){
        return $this->hasMany(Post_like::class);
    }
    
    public function getPaginateByLimit(int $limit_count = 5){
        return $this::with('league')->orderBy('date', 'DESC')->paginate($limit_count);
    }
}
