<?php

namespace DesignPattern\Composite;

use DesignPattern\Composite\FieldComposite;

class Form extends FieldComposite
{
    protected string $url;

    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    public function render(): string
    {
        $output = parent::render();

        return "<form action=\"{$this->url}\">\n<h3>{$this->title}</h3>\n$output</form>\n";
    }
}