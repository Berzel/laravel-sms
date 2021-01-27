<?php

namespace Berzel\LaravelSms;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/sms.php', 'sms');
        
        $this->app->bind(SmsService::class, function ($app) {
            return SmsDriverFactory::make($driver = config('sms.default'));
        });
    }
}
