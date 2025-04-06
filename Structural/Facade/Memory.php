<?php

namespace DesignPattern\Facade;

class Memory
{
    public function load($position, $data): void
    {
        echo "Loading data into memory at $position\n";
    }
}