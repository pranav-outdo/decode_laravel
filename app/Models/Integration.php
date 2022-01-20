<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Integration extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'logo',
        'description',
        'is_feature',
        'category_ids'
    ];

    protected $casts = [
        'category_ids' => 'array'
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class, IntegrationCategory::class);
    }
}
