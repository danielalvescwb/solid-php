<?php

namespace src\interfaces;

use src\components\Notification;

interface INotification
{
    public function sandNotification(Notification $notification);
}