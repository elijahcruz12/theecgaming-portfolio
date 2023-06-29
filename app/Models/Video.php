<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'versions',
        'thumbnails',
        'tags',
    ];

    protected $casts = [
        'thumbnails' => 'array',
        'versions' => 'array',
        'tags' => 'array'
    ];
}
