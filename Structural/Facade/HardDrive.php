<?php

namespace DesignPattern\Facade;

class HardDrive
{
    public function read($lba, $size): string
    {
        return "Data from sector $lba\n";
    }
}