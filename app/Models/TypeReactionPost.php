<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeReactionPost extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_typeReactionPost';

    protected $fillable = [
        'img_reactionPost',
    ];

    public function reactionPost()
    {
        return $this->hasMany(ReactionPost::class, 'id_typeReactionPost');
    }
}
