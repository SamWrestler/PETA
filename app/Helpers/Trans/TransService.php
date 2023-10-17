<?php

namespace App\Helpers\Trans;

use App\Models\Translate;

class TransService
{
    public function translate($content)
    {
        if(app()->currentLocale() ==='fa'){
            return Translate::where('content' , $content)->where('lang', 'fa')->first()->text;
        }elseif(app()->currentLocale() === 'en'){
            return Translate::where('content', $content)->where('lang' , 'en')->first()->text;
        }
    }
}
