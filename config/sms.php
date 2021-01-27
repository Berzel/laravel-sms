<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default SMS Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default sms driver that is used to send any sms
    | messages sent by your application.
    |
    */

    'default' => env('SMS_DRIVER', 'twilio'),

    /*
    |--------------------------------------------------------------------------
    | SMS Driver configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the sms drivers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Supported: "twilio", "log", "nexmo"
    |
    */

    'drivers' => [
        'twilio' => [
            'sid' => env('TWILIO_SID'),
            'token' => env('TWILIO_TOKEN'),
            'from' => env('TWILIO_FROM')
        ]
    ]
];
