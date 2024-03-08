<?php

namespace App\Models;
use    Illuminate\Database\QueryException ;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends Model
{
    use HasFactory;

    protected $table = 'role_has_permissions';

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the permission associated with the role.
     */
    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}