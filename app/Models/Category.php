<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'is_active',
    ];

    // public function integrations()
    // {
    //     return $this->belongsToMany(Integration::class, IntegrationCategory::class);
    // }

    public function integrations()
    {
        return $this->belongsToMany(Integration::class)->whereJsonContains('type_ids', ['id']);
    }
}