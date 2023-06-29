<?php

namespace App\Models;

use App\Enums\Portfolio\PortfolioItemTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => PortfolioItemTypeEnum::class
    ];
}
