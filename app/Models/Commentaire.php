<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'source_comm', 'contenu_comm', 'date_comm',
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'id_pub');
    }
}
