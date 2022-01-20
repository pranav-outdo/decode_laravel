<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ResourceTopic;
use App\Models\ResourceType;

class ContentVault extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'link',
        'image',
        'is_active',
        'type_ids',
        'topic_ids'
    ];

    protected $casts = [
        'type_ids' => 'array',
        'topic_ids' => 'array'
    ];
}
