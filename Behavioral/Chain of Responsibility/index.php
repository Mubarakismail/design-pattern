<?php


use DesignPattern\ChainOfResponsibility\RoleCheckMiddleware;
use DesignPattern\ChainOfResponsibility\Server;
use DesignPattern\ChainOfResponsibility\ThrottlingMiddleware;
use DesignPattern\ChainOfResponsibility\UserExistsMiddleware;

require_once __DIR__ . "/../../vendor/autoload.php";

/*
 *
 * Chain of Responsibility is behavioral design pattern that allows passing request along
 * the chain of potential handlers until one of them handles request.
 *
 * The pattern allows multiple objects to handle the request without coupling sender
 * class to the concrete classes of the receivers. The chain can be composed dynamically
 *  at runtime with any handler that follows a standard handler interface.
 */


$server = new Server();
$server->register("admin@example.com", "admin_pass");
$server->register("user@example.com", "user_pass");

// All middleware are chained. The client can build various configurations of
// chains depending on its needs.
$middleware = new ThrottlingMiddleware(2);
$middleware
    ->linkWith(new UserExistsMiddleware($server))
    ->linkWith(new RoleCheckMiddleware());

// The server gets a chain from the client code.
$server->setMiddleware($middleware);

// ...

do {
    echo "\nEnter your email:\n";
    $email = readline();
    echo "Enter your password:\n";
    $password = readline();
    $success = $server->logIn($email, $password);
} while (!$success);