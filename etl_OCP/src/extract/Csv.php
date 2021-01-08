<?php

namespace src\extract;

class Csv extends File
{

    public function readFile(string $file): array
    {
        $handle = fopen($file,"r");
        while (($line =fgetcsv($handle,null,";"))!== false) {
            $this->setData($line[0],$line[1],$line[2]);
        }
        fclose($handle);
        return $this->getData();
    }

}