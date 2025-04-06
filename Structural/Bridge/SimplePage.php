<?php

namespace DesignPattern\Bridge;

use DesignPattern\Bridge\Page;

class SimplePage extends Page
{
    protected string $title;
    protected string $content;

    public function __construct(Renderer $renderer, string $title, string $content)
    {
        parent::__construct($renderer);
        $this->title = $title;
        $this->content = $content;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderTitle($this->title),
            $this->renderer->renderTextBlock($this->content),
            $this->renderer->renderHeader(),
            $this->renderer->renderFooter(),
        ]);
    }
}