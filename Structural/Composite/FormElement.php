<?php

namespace DesignPattern\Composite;

abstract class FormElement
{
    protected string $title, $name;
    protected array|string $data = [];

    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }


    public function setData(array|string $data): void
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }


    /**
     * Each concrete DOM element must provide its rendering implementation, but
     * we can safely assume that all of them are returning strings.
     */
    abstract public function render(): string;
}