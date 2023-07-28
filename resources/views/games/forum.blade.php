<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-app-layout>
    <head>
        <meta charset="utf-8">
        <title>Forum</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <p class='flex justify-center text-xl'>{{ $game->home_team->name }} VS {{ $game->away_team->name }}</p>
        <div class='games'>
            <form action="/games/{{$game->id}}"　method="GET">
                <button class="px-2 py-1 mx-2 rounded bg-sky-500 text-white font-bold link-hover cursor-pointer inline-block" type="submit" name="sort" @if(!isset($sort) || $sort !== '1')value="1" @elseif($sort == '1')value="2" @endif>投稿順</button>
                <button class="px-2 py-1 mx-2 rounded bg-sky-500 text-white font-bold link-hover cursor-pointer inline-block" type="submit" name="sort" @if(!isset($sort) || $sort !== '3')value="3" @elseif($sort == '3')value="4" @endif>いいね順</button>
            </form>
            <div class="h-32 w-32">
                <button class="fixed top-13 right-0" id="btn" type="button" onclick="hoge()"><i class="far fa-comment-alt fa-4x"></i></button>
            </div>
            @foreach($posts as $post)
                <div class="bg-white rounded-md mt-1 mb-1 p-3">
                    
                    @auth
                    @if($post->user_id == Auth::id())
                    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                      </svg>
                    </button>
                    
                    <!-- Dropdown menu -->
                    <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                          <li>
                            <a href="/posts/{{ $post->id }}/edit" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">編集</a>
                          </li>
                          <li>
                            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" type="button" onclick="deletePost({{ $post->id }})">削除</button> 
                            </form>
                          </li>
                        </ul>
                    </div>
                    @endif
                    @endauth

                    <p class="mb-2 text-xs">{{$post->created_at}}</p>
                    <p class="mb-2 text-xl font-bold">{{ $post->title }}<p>
                    <p class="mb-2">{{ $post->content }}</p>
                    <div class="flex w-2/3">
                        @foreach($post->images as $image)
                        @if($image->image_url)
                        <div>
                            <img src="{{ $image->image_url }}" alt="画像が読み込めません。"/>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div>
                        @if($post->is_liked_by_auth_user())
                            <a href="{{ route('post.unlike', ['id' => $post->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $post->post_likes->count() }}</span></a>
                        @else
                            <a href="{{ route('post.like', ['id' => $post->id]) }}" class="btn btn-secondary btn-sm">いいね<span class="badge">{{ $post->post_likes->count() }}</span></a>
                        @endif
                    </div>
                    <form class="inline" action="/replies/{{$post->id}}" method="POST">
                        @csrf
                        <div class="">
                        <textarea class="w-9/12" name="reply[content]" placeholder="返信"></textarea>
                        <input class="px-2 py-1 ml-2 rounded bg-emerald-500 font-bold link-hover cursor-pointer text-white" type="submit" value="返信"/>
                        </div>
                    </form>
                    <div class='reply'>
                        @foreach($post->replies as $reply)
                        <p class="mb-2 text-xs">{{$reply->created_at}}</p>
                        <p class="mb-2">{{ $reply->content}}</h2>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <form action="/games/{{$game->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <br>
            <div class="title">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">タイトル</label>
                <textarea id="message" rows="4" name="post[title]" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="タイトル"></textarea>
            </div>
            <div class="body">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">コメント</label>
                <textarea id="message" rows="4" name="post[content]" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="コメント"></textarea>
            </div>
            <div class="image">
                <input type="file" name="images[]" multiple>
            </div>
            <br>
            <div class="w-10 text-white bg-emerald-500">
                <input type="submit" value="送信"/>
            </div>
        </form>
        <script>
        function deletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
        <div class='flex justify-center'>
            <a href='/'>戻る</a> 
        </div>
        <script>
            function hoge(){
      
              let elm = document.documentElement;
            
              // scrollHeight ページの高さ clientHeight ブラウザの高さ
              let bottom = elm.scrollHeight - elm.clientHeight;
            
              // 垂直方向へ移動
              window.scroll(0, bottom);
            
            }
        </script>
    </body>
    </x-app-layout>
</html>
