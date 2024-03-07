<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens;
    use SoftDeletes;

    protected $fillable = [
        'nom', 'prenom', 'email', 'password', 'tel',
    ];

    public function publications()
    {
        return $this->hasMany(Publication::class, 'id_user');
    }
}