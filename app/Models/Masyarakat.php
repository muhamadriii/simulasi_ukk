<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Masyarakat extends Authenticatable
{
    use HasFactory;

    // protected $table= 'masyarakat';

    protected $fillable = [
        'nik',
        'name',
        'username',
        'password',
        'telp',
    ];


    protected $hidden = [
        'password',
    ];
}
