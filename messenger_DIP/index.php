<?php

require __DIR__."/vendor/autoload.php";

use src\Messenger;
use src\channels\Mail;
use src\channels\Sms;

$msgMail = new Messenger(new Mail());
$msgMail->sendToken();

echo "<hr>";

$msgSms = new Messenger(new Sms());
$msgSms->sendToken();