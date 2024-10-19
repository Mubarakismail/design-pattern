<?php

interface Subscriber
{
    public function notify(string $message): void;
}