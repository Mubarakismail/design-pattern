<?php

namespace DesignPattern\Command;


class TurnOffLightCommand implements Command
{
    public function __construct(private Light $light)
    {
    }

    public function execute(): void
    {
        $this->light->off();
    }
}