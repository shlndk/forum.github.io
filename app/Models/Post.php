<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['username', 'title', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favorites(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorites', 'post_id', 'user_id');
    }
}
