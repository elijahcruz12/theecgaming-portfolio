<?php

namespace App\Enums\Portfolio;

enum PortfolioItemTypeEnum : string
{
    case Video = 'video';
    case Website = 'website';
    case Image = 'image';
    case Text = 'text';
}
