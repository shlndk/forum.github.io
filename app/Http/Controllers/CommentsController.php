<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function addComment(Request $request)
    {
        $comment = $request->validate([
            'content' => 'required|min:6',
            'post_id' => 'required|integer'
        ]);

        $comment['user_id'] = auth()->id();

        Comment::create($comment);

        return back()->with('success', 'Комментарий успешно добавлен.');
    }
    public function showComment(Post $post, User $user)
    {

        return view('comments.form', compact( 'post', 'user'));
    }


    public function destroyComment($commentId)
    {
        $comment = Comment::findOrFail($commentId);

        if (auth()->id() !== $comment->user_id) {
            return redirect()->back()->with('error', 'У вас нет прав для удаления этого комментария.');
        }

        $comment->delete();
        return redirect()->back()->with('success', 'Комментарий успешно удалён.');
    }
}
