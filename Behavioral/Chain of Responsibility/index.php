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


/**
 * The most widely known use of the Chain of Responsibility (CoR) pattern in the PHP world is found in HTTP request middleware.
 * These are implemented by the most popular PHP frameworks and even got standardized as part of PSR-15.
 *
 * It works like this: an HTTP request must pass through a stack of middleware objects in order to be handled by the app.
 * Each middleware can either reject the further processing of the request or pass it to the next middleware.
 * Once the request successfully passes all middleware, the primary handler of the app can finally handle it.
 *
 * You might have noticed that this approach is kind of inverse to the original intent of the pattern. Indeed,
 * in the typical implementation, a request is only passed along a chain if a current handler Can’t process it,
 * while a middleware passes the request further down the chain when it thinks that the app CAN handle the request. Nevertheless,
 * since middleware objects are chained, the whole concept is still considered an example of the CoR pattern.
 *
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

do {
    echo "\nEnter your email:\n";
    $email = readline();
    echo "Enter your password:\n";
    $password = readline();
    $success = $server->logIn($email, $password);
} while (!$success);