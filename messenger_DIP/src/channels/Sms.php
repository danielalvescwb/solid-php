<?php

namespace src\channels;

use src\IMessengerToken;

class Sms implements IMessengerToken
{
    public function send(): void
    {
        echo "Seu token é 321-456";
    }
}