<?php

use DesignPattern\Command\Light;
use DesignPattern\Command\RemoteControl;
use DesignPattern\Command\TurnOffLightCommand;
use DesignPattern\Command\TurnOnLightCommand;

require_once __DIR__ . '/../../vendor/autoload.php';

/*
 *
 * The Command Pattern is a behavioral design pattern that turns a request into a standalone object, allowing you to:
 * Parameterize methods with different requests,
 * Queue, log, or undo operations,
 * And decouple the object that sends the request from the one that handles it.
 *
 *
 * A remote control (invoker) sends a signal to a TV, a speaker, or an AC unit (receiver).
 * Each button is wired to a command (turn on/off), but the remote doesn’t know what the
 * device is doing internally.
 */


$light = new Light();
$onCommand = new TurnOnLightCommand($light);
$offCommand = new TurnOffLightCommand($light);

$remote = new RemoteControl();
$remote->submit($onCommand);   // Light is ON
$remote->submit($offCommand);  // Light is OFF