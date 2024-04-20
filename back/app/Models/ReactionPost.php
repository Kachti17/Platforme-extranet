<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ReactionPost extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_reactionPost';

    protected $fillable = [
        // Attributs spécifiques à ReactionPost
    ];

    public function typeReactionPost()
    {
        return $this->belongsTo(TypeReactionPost::class, 'typeReactionPost_id');
    }
}