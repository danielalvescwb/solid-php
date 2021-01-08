<?php

namespace src\extract;

class File
{
    private $data = array();


    public function setData(string $name, string $cpf, string $email)
    {
        array_push($this->data, ['name'=>$name, 'cpf'=> $cpf, 'email'=> $email]);
    }

    public function getData()
    {
        return $this->data;
    }
}
