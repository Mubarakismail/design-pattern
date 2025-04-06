<?php

namespace DesignPattern\Behavioral\Observer;
interface Subscriber
{
    public function notify(string $message): void;
}