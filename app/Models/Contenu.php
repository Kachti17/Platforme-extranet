<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_contenu', 'type_contenu', 'texte', 'image_path', 'video_path', 'lien'
    ];

}