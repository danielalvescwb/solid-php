<?php

namespace src\channels;

use src\IMessengerToken;

class Mail implements IMessengerToken
{
    public function send(): void
    {
        echo "Seu token é 123-456";
    }
}