<?php

namespace DesignPattern\Behavioral\Observer;

class Customer implements Subscriber
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function notify(string $message): void
    {
        echo "Notifying $this->name about " . $message . "\n";
    }
}