<?php

require_once __DIR__ . '/../../vendor/autoload.php';


use DesignPattern\Singleton\Logger;

/*
 * Singleton is a creational design pattern, which ensures that only one object of its kind exists and provides a single
 *  point of access to it for any other code.
 */

/*
 * Singleton has almost the same pros and cons as global variables. Although they’re super-handy, they break the modularity of your code.
 * You can’t just use a class that depends on a Singleton in some other context, without carrying over the Singleton to the other context.
 *  Most of the time, this limitation comes up during the creation of unit tests.
 */

function clientCode(): void
{
    $s1 = Logger::getInstance();
    $s2 = Logger::getInstance();
    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

clientCode();