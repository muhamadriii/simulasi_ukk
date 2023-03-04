<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Petugas extends Authenticatable
{
    use HasFactory;

    protected $table= 'petugas';

    protected $fillable = [
        'name',
        'username',
        'password',
        'role',
        'telp',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
}
