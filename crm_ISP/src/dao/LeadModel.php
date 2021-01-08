<?php

namespace src\dao;

use src\BD;
use src\interfaces\IRegister;
use src\interfaces\INotification;

use src\components\Notification;

class LeadModel extends BD implements IRegister, INotification
{
    
    public function save(){

    }

    public function sandNotification(Notification $notification){

    }
    
}
