<?php

use DesignPattern\Iterator\CsvIterator;

require_once __DIR__ . '/../../vendor/autoload.php';

/*
 *
 * Iterator is a behavioral design pattern that allows sequential traversal through a complex
 * data structure without exposing its internal details.
 *
 *
 * Thanks to the Iterator, clients can go over elements of different collections in a similar
 * fashion using a single iterator interface.
 *
 *
 * Since PHP already has a built-in Iterator interface, which provides convenient integration with
 *  foreach loops, it’s very easy to create your own iterators for traversing almost every imaginable
 *  data structure.
 *
 * This example of the Iterator pattern provides easy access to CSV files.
 */


try {
    $csv = new CsvIterator(__DIR__ . '/cats.csv');

    foreach ($csv as $key => $row) {
        print_r($row);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

