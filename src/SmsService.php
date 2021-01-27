<?php

namespace Berzel\LaravelSms;

abstract class SmsService {

    /**
     * The recepient of the message
     *
     * @var string
     */
    protected $to;

    /**
     * The text message
     *
     * @var string
     */
    protected $body;

    /**
     * Set the receipient of the sms
     *
     * @param $user mixed
     * @return SmsService
     */
    public function to($user)
    {
        $this->to = $user->phone;
        return $this;
    }

    /**
     * Send the message
     *
     * @param $message
     * @return void
     */
    public function send(Message $message)
    {
        $message = $message->build();
        $this->to = $message->to ?? $this->to;
        $this->body = $message->body;
        $this->doSend();
    }

    /**
     * Send the message through the wire
     *
     * @return void
     */
    protected abstract function doSend();
}
