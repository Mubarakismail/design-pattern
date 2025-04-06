<?php

use DesignPattern\Prototype\Author;
use DesignPattern\Prototype\Page;

require_once __DIR__ . '/../../vendor/autoload.php';


/*
 * The Prototype pattern provides a convenient way of replicating existing objects
 *  instead of trying to reconstruct the objects by copying all of their fields directly.
 * The direct approach not only couples you to the classes of the objects being cloned, but
 * also doesn’t allow you to copy the contents of the private fields. The Prototype pattern
 * lets you perform the cloning within the context of the cloned class, where the access to
 * the class’ private fields isn’t restricted.
 *
 *
 * This example shows you how to clone a complex Page object using the Prototype pattern.
 * The Page class has lots of private fields, which will be carried over to the cloned object
 * thanks to the Prototype pattern.
 */


function clientCode(): void
{
    $author = new Author("John Smith");
    $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

    // ...

    $page->addComment("Nice tip, thanks!");

    // ...

    $draft = clone $page;
    echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";
    print_r($draft);
}

clientCode();