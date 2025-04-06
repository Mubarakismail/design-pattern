<?php

use DesignPattern\Factory\FacebookPoster;
use DesignPattern\Factory\LinkedinPoster;
use DesignPattern\Factory\SocialNetworkPoster;

require_once __DIR__ . '/../../vendor/autoload.php';


/* Factory method is a creational design pattern which solves the problem of creating product objects
   without specifying their concrete classes. */

/* The Factory Method defines a method, which should be used for creating objects instead of
   using a direct constructor call (new operator). Subclasses can override this method to change
   the class of objects that will be created. */


/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 */
function clientCode(SocialNetworkPoster $creator): void
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedinPoster("john_smith@example.com", "******"));