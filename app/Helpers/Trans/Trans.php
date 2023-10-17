<?php

namespace App\Helpers\Trans;

use Illuminate\Support\Facades\Facade;

class Trans extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'trans';
    }
}
