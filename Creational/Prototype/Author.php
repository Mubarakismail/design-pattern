<?php

namespace DesignPattern\Prototype;

class Author
{
    private string $name;

    private array $pages = [];


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }
}