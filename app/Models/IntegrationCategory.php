<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegrationCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'integration_id',
        'category_id',
    ];

    public function integrations()
    {
        return $this->belongsTo(Integration::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
