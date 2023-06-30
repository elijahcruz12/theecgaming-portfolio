<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use think\Hashlib;

class Link extends Model
{
    use HasFactory;

    public function generateSlug()
    {
        $hashlib = new Hashlib('tinyurl', 3);

        $encodedSetup = time() - 1688084271;

        $this->slug = $hashlib->encode($encodedSetup);
    }
}
