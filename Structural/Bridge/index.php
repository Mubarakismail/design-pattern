<?php

use DesignPattern\Bridge\HTMLRenderer;
use DesignPattern\Bridge\JsonRenderer;
use DesignPattern\Bridge\Page;
use DesignPattern\Bridge\Product;
use DesignPattern\Bridge\ProductPage;
use DesignPattern\Bridge\SimplePage;

require_once __DIR__ . '/../../vendor/autoload.php';


/*
 *
 * Bridge is a structural design pattern that divides business logic or huge class into separate class hierarchies that
 *  can be developed independently.
 *
 * One of these hierarchies (often called the Abstraction) will get a reference to an object of the second hierarchy (Implementation).
 * The abstraction will be able to delegate some (sometimes, most) of its calls to the implementations object. Since all implementations
 *  will have a common interface, they’d be interchangeable inside the abstraction.
 */

function clientCode(Page $page): void
{
    // ...

    echo $page->view();

    // ...
}

/**
 * The client code can be executed with any pre-configured combination of the
 * Abstraction+Implementation.
 */
$HTMLRenderer = new HTMLRenderer();
$JSONRenderer = new JsonRenderer();

$page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
echo "HTML view of a simple content page:\n";
clientCode($page);
echo "\n\n";

/**
 * The Abstraction can change the linked Implementation at runtime if needed.
 */
$page->changeRender($JSONRenderer);
echo "JSON view of a simple content page, rendered with the same client code:\n";
clientCode($page);
echo "\n\n";


$product = new Product("123", "Star Wars, episode1",
    "A long time ago in a galaxy far, far away...",
    "/images/star-wars.jpeg", 39.95);

$page = new ProductPage($HTMLRenderer, $product);
echo "HTML view of a product page, same client code:\n";
clientCode($page);
echo "\n\n";

$page->changeRender($JSONRenderer);
echo "JSON view of a simple content page, with the same client code:\n";
clientCode($page);