<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'title',
        'text',
        'slug',
        'img'
    ];

    protected $primaryKey = 'slug';
    
    public $incrementing = false;
    protected $keyType = 'string';

}
