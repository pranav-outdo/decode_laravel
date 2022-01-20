<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Resource extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'resources';

    protected $fillable = [
        'title',
        'link',
        'image',
        'type',
        'description',
        'is_active'
    ];
}
