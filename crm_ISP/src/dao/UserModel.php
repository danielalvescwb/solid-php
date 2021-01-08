<?php

namespace src\dao;

use src\BD;
use src\interfaces\IRegister;
use src\interfaces\ILog;

use src\components\Log;
use src\components\Notification;

class UserModel extends BD implements IRegister, ILog
{
    
    public function save(){

    }

    public function registerLog(Log $log){

    }

    public function sandNotification(Notification $notification){

    }
}
