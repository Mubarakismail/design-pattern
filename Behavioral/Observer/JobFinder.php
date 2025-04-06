<?php

namespace DesignPattern\Behavioral\Observer;

class JobFinder implements Subscriber
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function notify(string $message): void
    {
        echo $this->name . " is receiving notification about job opening: " . $message . "\n";
    }

    public function getName(): string
    {
        return $this->name;
    }
}