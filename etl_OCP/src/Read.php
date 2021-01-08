<?php

namespace src;
use src\File;

class Read{
    private $path;
    private $file;

    public function getPath():string
    {
        return $this->path;
    }
    public function getFile():string
    {
        return $this->file;
    }
    public function setPath(string $path): void
    {
        $this->path = $path;
    }
    public function setFile(string $file): void
    {
        $this->file = $file;
    }
    public function readFile(): array
    {
        $path = $this->getPath()."\\".$this->getFile();
        $ext = explode('.',$this->getFile());
        $class = '\src\extract\\' . ucfirst($ext[1]);
        return call_user_func_array(
            [
                new $class,
                'readFile'
            ],
            [
                $path
            ]
        );
    }
}