<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Http\Resources\CommentResource;
use App\Http\Requests\StoreCommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, $id){
        $post = Post::findOrFail($id);
        $comment = $post->comment()->create($request->validated());
        return new CommentResource($comment);
    }

    public function destroy($id){
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return response()->noContent();
    }
}
