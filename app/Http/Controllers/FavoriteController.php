<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function addFav($postId)
    {
        $user = Auth::user();
        $user->favorites()->attach($postId);

        return redirect()->back()->with('success', 'Post added to favorites!');
    }
    public function showFav()
    {
        $posts = auth()->user()->favorites()->get();
        return view('layouts.fav', compact('posts'));
    }
    public function removeFav($postId)
    {
        $user = Auth::user();
        $user->favorites()->detach($postId);

        return back();
    }
}
