<?php

namespace Berzel\LaravelSms;

use Illuminate\Support\Facades\Facade;

class Sms extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return SmsService::class;
    }
}