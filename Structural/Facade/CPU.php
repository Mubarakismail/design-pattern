<?php

namespace DesignPattern\Facade;

class CPU
{
    public function freeze(): void
    {
        echo "Freezing CPU\n";
    }

    public function execute(): void
    {
        echo "Executing instructions\n";
    }
}