<?php

namespace DesignPattern\Factory;

class LinkedinConnector implements SocialNetworkConnector
{
    private string $email, $password;

    /**
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function login(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    public function logout(): void
    {
        echo "Send HTTP API request to log out user $this->email\n";
    }

    public function createPost(string $content): void
    {
        echo "Send HTTP API requests to create a post in Linkedin timeline.\n";
    }
}