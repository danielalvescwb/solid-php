<?php

namespace src\extract;

class Txt extends File
{

    public function readFile(string $file):array
    {
        $handle = fopen($file,"r");
        while (!feof($handle)) {
            $line = fgets($handle);
            $this->setData(substr($line,11,30),substr($line,0,11),substr($line,41,60));
        }
        fclose($handle);
        return $this->getData();
    }
}