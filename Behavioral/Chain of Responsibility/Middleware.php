<?php

namespace DesignPattern\ChainOfResponsibility;

abstract class Middleware
{
    private Middleware $next;

    public function linkWith(Middleware $next): Middleware
    {
        $this->next = $next;
        return $next;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->next) {
            return true;
        }
        return $this->next->check($email, $password);
    }
}