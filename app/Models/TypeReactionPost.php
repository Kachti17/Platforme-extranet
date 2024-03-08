<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeReactionPost extends Model
{
    use HasFactory;


    protected $fillable = [
        'img_reactionPost',
    ];

    public function reactionPost()
    {
        return $this->hasMany(ReactionPost::class, 'typeReactionPost_id');
    }
}
