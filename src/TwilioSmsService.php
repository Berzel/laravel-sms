<?php

namespace Berzel\LaravelSms;

use Twilio\Rest\Client;

class TwilioSmsService extends SmsService {

    /**
     * Send the message through the wire
     *
     * @return void
     */
    protected function doSend()
    {
        $sid = 'ACebdf4b6422fef133ab2176c74b5543be';
        $token = '94cdb92fb69c9ef12027342a38b4e17f';
        $client = new Client($sid, $token);

        $client->messages->create(
            $this->recepient,
            [
                'from' => 'Pygon',
                'body' => $this->body
            ]
        );
    }
}
