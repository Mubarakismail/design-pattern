<?php

use DesignPattern\Proxy\CachingDownloader;
use DesignPattern\Proxy\Downloader;
use DesignPattern\Proxy\SimpleDownloader;

require_once __DIR__ . "/../../vendor/autoload.php";


/*
 *
 * Proxy is a structural design pattern that provides an object that acts as a substitute for a real
 * service object used by a client. A proxy receives client requests, does some work (access control, caching, etc.)
 * and then passes the request to a service object.
 *
 * The proxy object has the same interface as a service, which makes it interchangeable with a real object
 *  when passed to a client.
 *
 * There are countless ways proxies can be used: caching, logging, access control, delayed initialization, etc.
 * This example demonstrates how the Proxy pattern can improve the performance of a downloader object by caching its results.
 */


function clientCode(Downloader $subject): void
{
    $result = $subject->download("http://example.com/");

    // Duplicate download requests could be cached for a speed gain.

    $result = $subject->download("http://example.com/");
}

echo "Executing client code with real subject:\n";
$realSubject = new SimpleDownloader();
clientCode($realSubject);

echo "\n";

echo "Executing the same client code with a proxy:\n";
$proxy = new CachingDownloader($realSubject);
clientCode($proxy);