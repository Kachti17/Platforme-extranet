<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;


    protected $fillable = [
        'description',
        'image',
        'date_event',
        'lieu_event',
        'nbr_max',
        'nbr_participants',
        'source_event'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}