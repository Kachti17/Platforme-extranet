<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReactionMsg extends Model
{
    use HasFactory;

    protected $primaryKey = 'reactionMsg_id';

    protected $fillable = [
        // Attributs spécifiques à ReactionMsg
    ];

    public function typeReactionMsg()
    {
        return $this->belongsTo(TypeReactionMsg::class, 'typeReactionMsg_id');
    }
}