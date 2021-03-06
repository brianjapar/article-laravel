<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $comment = new Comment();
        $comment->body = $request->comment_body;
        $comment->user()->associate($request->user());
        $article = Artikel::find($request->article_id);
        $article->comments()->save($comment);
        return back();
    }
    public function storeReplies(Request $request){
        $reply = new Comment();
        $reply->body = $request->get('comment');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $article = Artikel::find($request->article_id);
        $article->comments()->save($reply);
        return back();
    }
}
