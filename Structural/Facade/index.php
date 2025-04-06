<?php


use DesignPattern\Facade\ComputerFacade;

require_once __DIR__ . "/../../vendor/autoload.php";

/*
 *
 * The Facade is a structural design pattern that provides a simple interface to a complex
 * subsystem of classes, libraries, or frameworks.
 */



$computer = new ComputerFacade();
$computer->start();