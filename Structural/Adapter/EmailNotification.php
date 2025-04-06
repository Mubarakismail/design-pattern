<?php

namespace DesignPattern\Adapter;

use DesignPattern\Adapter\Notification;

class EmailNotification implements Notification
{
    private string $adminMail;

    public function __construct(string $adminMail)
    {
        $this->adminMail = $adminMail;
    }

    public function send(string $title, string $message): void
    {
        // mail($this->adminMail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminMail}' that says '$message'.";
    }
}