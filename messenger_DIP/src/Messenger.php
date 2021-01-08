<?php

namespace src;

use src\IMessengerToken;

class Messenger{
    private $channel;

    public function __construct(IMessengerToken $channel){
        $this->setChannel($channel);
    }
    public function getChannel(): IMessengerToken
    {
        return $this->channel;
    }
    public function setChannel(IMessengerToken $channel)
    {
        $this->channel = $channel;
    }
    public function sendToken():void{
        $this->getChannel()->send();
    }
}