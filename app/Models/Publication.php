<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_pub', 'isApproved', 'nbr_comm', 'nbr_react',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contenu()
    {
        return $this->belongsTo(Contenu::class, 'contenu_id');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'pub_id');
    }

    public function reactions()
    {
        return $this->hasMany(ReactionPost::class, 'pub_id');
    }
}
