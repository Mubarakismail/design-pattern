<?php

namespace DesignPattern\Adapter;

interface Notification
{
    public function send(string $title, string $message);
}