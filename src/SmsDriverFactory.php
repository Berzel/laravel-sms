<?php

namespace Berzel\LaravelSms;

class SmsDriverFactory {


    /**
     * Create an SMS driver instance
     * 
     * @param $driver The name of the driver
     * @return SmsService
     */
    public static function make($driver)
    {
        switch ($driver) {
            case 'twilio':
                return new TwilioSmsDriver;
            
            default:
                return new TwilioSmsDriver;
        }
    }
}