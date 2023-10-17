<?php

namespace App\Helpers\Trans;

use Illuminate\Support\ServiceProvider;

class TransServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('trans' , function(){
            return new TransService();
        });
    }
}
