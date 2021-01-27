<?php

namespace Berzel\LaravelSms;

use Twilio\Rest\Client;

class TwilioSmsDriver extends SmsService {

    /**
     * Send the message through the wire
     *
     * @return void
     */
    protected function doSend()
    {
        $sid = config('sms.drivers.twilio.sid');
        $token = config('sms.drivers.twilio.token');
        $client = new Client($sid, $token);

        $client->messages->create($this->to, [
                'from' => config('sms.drivers.twilio.from'),
                'body' => $this->body
            ]
        );
    }
}
