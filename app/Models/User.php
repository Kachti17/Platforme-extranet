<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prenom', 'login', 'pswrd', 'tel',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function publications()
    {
        return $this->hasMany(Publication::class, 'id_user');
    }

}