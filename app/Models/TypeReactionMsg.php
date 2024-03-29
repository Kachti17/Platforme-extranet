<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeReactionMsg extends Model
{
    use HasFactory;


    protected $fillable = [
        'img_reactionMsg',
    ];

    public function reactionMsg()
    {
        return $this->hasMany(ReactionMsg::class, 'typeReactionMsg_id');
    }
}