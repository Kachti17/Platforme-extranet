<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_pub', 'source_pub', 'isApproved', 'nbr_comm', 'nbr_react',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
