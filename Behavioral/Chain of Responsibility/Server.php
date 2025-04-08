<?php

namespace DesignPattern\ChainOfResponsibility;

class Server
{
    private array $users = [];

    private Middleware $middleware;

    /**
     * @param Middleware $middleware
     */
    public function setMiddleware(Middleware $middleware): void
    {
        $this->middleware = $middleware;
    }

    public function login(string $email, string $password): bool
    {
        if ($this->middleware->check($email, $password)) {
            echo "Server: Authorization has been successful!\n";

            // Do something useful for authorized users.

            return true;
        }
        return false;
    }


    public function register(string $email, string $password): void
    {
        $this->users[$email] = $password;
    }


    public function hasEmail(string $email): bool
    {
        return isset($this->users[$email]);
    }

    public function isValidPassword(string $email, string $password): bool
    {
        return $this->users[$email] === $password;
    }
}