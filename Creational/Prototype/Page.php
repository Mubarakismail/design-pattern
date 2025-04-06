<?php

namespace DesignPattern\Prototype;

use Dom\Comment;

class Page
{
    private string $title;

    private string $body;

    private Author $author;

    private array $comments = [];

    private \DateTime $date;

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = new \DateTime();
    }


    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function __clone(): void
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime();
    }
}