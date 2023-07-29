<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function game(){
        return $this->belongsTo(Game::class);
    }
    
    public function images(){
        return $this->hasMany(Image::class);
    }
    
    public function user(){
        return $this->belongsTo(User::post);
    }
    
    public function replies(){
        return $this->hasMany(Reply::class);
    }
    
    public function post_likes(){
        return $this->hasMany(Post_like::class);
    }
    
    public function is_liked_by_auth_user()
    {
        $id = Auth::id();

        $likers = array();
        foreach($this->post_likes as $post_like) {
            array_push($likers, $post_like->user_id);
        }

        if (in_array($id, $likers)) {
            return true;
        }else{
            return false;
        }
    }
}
