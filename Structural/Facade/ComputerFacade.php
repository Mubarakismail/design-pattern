<?php

namespace DesignPattern\Facade;

class ComputerFacade
{
    protected CPU $cpu;
    protected Memory $memory;

    protected HardDrive $hardDrive;

    public function __construct()
    {
        $this->cpu = new CPU();
        $this->memory = new Memory();
        $this->hardDrive = new HardDrive();
    }

    public function start(): void
    {
        $this->cpu->freeze();
        $data = $this->hardDrive->read(1000, 4096);
        $this->memory->load(0, $data);
        $this->cpu->execute();
    }
}