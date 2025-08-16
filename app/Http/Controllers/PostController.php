<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::withCount('comment')
                    ->latest()
                    ->paginate(10);

        return PostResource::collection($posts);
    }

    public function show($id){
        $post = Post::with('comment')->findOrFail($id);
        $post->loadCount('comment');
        return new PostResource($post);
    }

    public function store(StorePostRequest $request){
        $post = Post::create($request->validated());

        return new PostResource($post);
    }

    public function update(UpdatePostRequest $request, $id){
        $post = Post::findOrFail($id);
        $post->update($request->validated());
        return new PostResource($post);
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->noContent();
    }
}
