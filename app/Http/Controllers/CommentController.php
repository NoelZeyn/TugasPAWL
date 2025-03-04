<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($postId)
    {
        $post = Post::findOrFail($postId);
        return response()->json($post->comments);
    }

    public function store(Request $request, $postId)
    {
        $post = Post::findOrFail($postId);

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post_id = $post->id;
        $comment->save();

        return response()->json($comment, 201);
    }

    public function show($postId, $id)
    {
        $post = Post::findOrFail($postId);
        $comment = $post->comments()->findOrFail($id);
        return response()->json($comment);
    }

    public function update(Request $request, $postId, $id)
    {
        $post = Post::findOrFail($postId);
        $comment = $post->comments()->findOrFail($id);
        $comment->update($request->all());
        return response()->json($comment);
    }

    public function destroy($postId, $id)
    {
        $post = Post::findOrFail($postId);
        $comment = $post->comments()->findOrFail($id);
        $comment->delete();
        return response()->json(null, 204);
    }
}
