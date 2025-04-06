<?php

namespace DesignPattern\Singleton;

class Logger
{
    private static Logger $instance;

    private function __construct()
    {
    }

    public static function getInstance(): Logger
    {
        if (!isset(self::$instance)) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    public function log(string $message): void
    {
        echo $message;
    }
}