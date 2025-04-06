<?php

namespace DesignPattern\Factory;

class FacebookConnector implements SocialNetworkConnector
{

    private string $login, $password;

    /**
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function login(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    public function logout(): void
    {
        echo "Send HTTP API request to log out user $this->login\n";
    }

    public function createPost(string $content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}