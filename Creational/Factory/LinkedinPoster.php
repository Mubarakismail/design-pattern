<?php

namespace DesignPattern\Factory;

use DesignPattern\Factory\SocialNetworkPoster;

class LinkedinPoster extends SocialNetworkPoster
{
    private string $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedinConnector($this->login, $this->password);
    }
}