<?php

namespace Gegetchkori\Laravel_lang_ka;

use Illuminate\Support\ServiceProvider;

class LanguageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/lang/ka' => resource_path('lang/ka'),
        ],'lang');
    }
}
