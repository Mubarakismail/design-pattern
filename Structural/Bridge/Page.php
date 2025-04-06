<?php

namespace DesignPattern\Bridge;

abstract class Page
{
    protected Renderer $renderer;

    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function changeRender(Renderer $renderer): void
    {
        $this->renderer = $renderer;
    }

    abstract public function view(): string;
}