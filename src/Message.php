<?php

namespace Berzel\LaravelSms;

use Error;

abstract class Message {

    /**
     * The recepient
     *
     * @var string
     */
    public $recepient;


    /**
     * The content of the message
     *
     * @var string
     */
    public $body;

    /**
     * Set the body of the message
     *
     * @param $message
     * @return Message
     */
    protected function body($message)
    {
        $this->body = $message;
        return $this;
    }

    /**
     * Set the recepient of the message
     *
     * @param $user
     */
    protected function to($user)
    {
        $this->recepient = $user->phone;
        return $this;
    }

    /**
     * Build the message
     *
     * @return Message
     */
    public function build()
    {
        throw new Error("Abstract Message does not implement build");
    }

}
