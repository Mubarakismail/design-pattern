<?php

namespace DesignPattern\Command;

class RemoteControl
{
    public function submit(Command $command): void
    {
        $command->execute();
    }
}