<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $role
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function resources()
    {
        return $this->belongsToMany(Resource::class)
            ->withPivot('status')
            ->withTimestamps();
    }

    public function favoriteResources()
    {
        return $this->belongsToMany(Resource::class)
            ->withPivot('status')
            ->wherePivot('status', 'favorite')
            ->withTimestamps();
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
