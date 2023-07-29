<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Post;
use App\Models\Team;
use App\Models\League;
use App\Models\Image;
use App\Models\Reply;
use Cloudinary;

class ReplyController extends Controller
{
    public function store(Post $post, Request $request, Reply $reply){
        $input = $request['reply'];
        $reply->content = $input['content'];
        $reply->user_id = 1;
        $reply->post_id = $post->id;
        $reply->save();
        return redirect('/games/' . $post->game_id);
    }
}
