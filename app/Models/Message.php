<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'corps', 'source', 'destination', 'date_envoie',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function reactions()
    {
        return $this->hasMany(Reaction::class, 'id_reactMsg');
    }
}
