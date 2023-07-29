<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Post;
use App\Models\Team;
use App\Models\League;
use App\Models\Image;
use App\Models\Reply;
use App\Models\Post_like;
use Illuminate\Support\Facades\Auth;
use Cloudinary;
use DateTime;

class GameController extends Controller
{
    public function index(Game $game, Request $request){
        $date = $request->input('date');
        $games = Game::whereDate('date', $date)->get();
        return view('games/index')->with(['games' => $games]);
    }
    
    public function forum(Game $game, Post $post, Post_Like $post_like, Request $request){
        $sort = $request->get('sort');
        $post = $game->posts;
        if ($sort) {
            if ($sort == '1') {
                $post = $post->sortBy('created_at');
            }elseif ($sort == '2') {
                $post = $post->sortByDesc('created_at');
            } elseif ($sort == '3') {
                $post = Post::withCount('post_likes')->orderBy('post_likes_count', 'asc')->paginate();
            }elseif ($sort == '4') {
                $post = Post::withCount('post_likes')->orderBy('post_likes_count', 'desc')->paginate();
            }
        } else {
            $post = $post;
        }
        
        return view('games/forum')->with(['game' => $game, 'sort' => $sort, 'posts' => $post]);
    }
    
    public function store(Game $game, Request $request, Post $post, Image $image)
    {
        $input = $request['post'];
        $post->title = $input['title'];
        $post->content = $input['content'];
        $post->game_id = $game->id;
        $post->user_id = Auth::id();
        $post->save();
        if($request->file('images')){
            foreach($request->images as $url){
                $image = new Image();
                $image_url = Cloudinary::upload($url->getRealPath())->getSecurePath();
                $image->image_url = $image_url;
                $image->post_id = $post->id;
                $image->save();
            }
        }
        return redirect('/games/' . $game->id);
    }
    
    public function edit(Post $post){
        return view('games/edit')->with(['post' => $post]);
    }
    
    public function update(Request $request, Post $post){
        $input_post = $request['post'];
        $post->title = $input_post['title'];
        $post->content = $input_post['content'];
        $post->save();
        return redirect('/games/' . $post->game->id);
    }
    
    public function delete(Post $post)
    {
        $game_id = $post->game->id;
        $post->delete();
        return redirect('/games/' . $game_id);
    }
    
    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->only(['post_like', 'post_unlike']);
    }
    
    public function post_like(Post $post, Request $request, $id)
    {
        Post_like::create([
            'post_id' => $id,
            'user_id' => Auth::id(),
        ]);

        session()->flash('success', 'You Liked the Reply.');

        return redirect()->back();
    }
    
    public function post_unlike(Post $post, Request $request, $id){
        $like = Post_like::where('post_id', $id)->where('user_id', Auth::id())->first();
        $like->delete();

        session()->flash('success', 'You Unliked the Reply.');

        return redirect()->back();
    }
    
    public function getEvents(Game $game)
    {
        $games = Game::get();
        //dd($game->league->name);
        $array = [];
        foreach($games as $game){
            $event['title'] = $game->league->name;
            $event['start']= $game->date;
            //ddd($game->date);
            $date = new DateTime($game->date);
            $event['url'] = url('?date=' . $date->format('Y-m-d'));
            $add_info = [
                            'title' => $event['title'],
                            'start' => $event['start'],
                            'url' => $event['url'],
                        ];
            array_push($array, $add_info);
        }
        //dd($array);
        return $array;
    }
    
    
}