<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'group_id',
    ];

    protected $hidden = [
        'password',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}