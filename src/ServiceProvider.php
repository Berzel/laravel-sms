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
        $this->app->bind(SmsService::class, function ($app) {
            return new TwilioSmsService();
        });
    }
}
